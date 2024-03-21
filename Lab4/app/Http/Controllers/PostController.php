<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //-------------------------------------------------------------------------------------
    public function index()
    {
        $posts = Post::with('user')->paginate(5);
        return view("posts.index", ["posts" => $posts]);
    }
    //--------------------------------------------------------------------------------------

    public function show($id)
    {
        $post = Post::with("user")->find($id);
        if (is_null($post)) {
            return redirect()->route("posts.index");
        }
        return view("posts.show", ["post" => $post]);
    }

    //----------------------------------------------------------------------------------------------

    public function create()
    {
        return view("posts.create", ["users" => User::all()]);
    }
    //-----------------------------------------------------------------------------------------------
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'published_at' => 'required',
            'enabled' => 'required|boolean',
        ]);
        $validatedData['owner'] = Auth::id();

        $user = User::find($validatedData['owner']);

        if (!$user) {
            $user = User::create(['id' => $validatedData['owner']]);
        }

        $post = $user->posts()->create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'published_at' => $validatedData['published_at'],
            'enabled' => $validatedData['enabled'],
        ]);

        return redirect()->route("posts.index");
    }
    //----------------------------------------------------------------------------------------------

    public function edit(Post $post)
    {
        return view("posts.edit", ["post" => $post]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::find($id)->update($validatedData);

        return redirect()->route("posts.show", $id);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route("posts.index");
    }
    //--------------------------------------------------------------------------------------------------
    public function trashed()
    {
        $trashedPosts = Post::onlyTrashed()->paginate(10);
        return view("posts.trashed", ["trashedPosts" => $trashedPosts]);
    }

    //--------------------------------------------------------------------------------------------------
    public function countUserPosts()
    {
        $usersWithPostCount = User::withCount('posts')->get();
        return view("posts.user_posts_count", ["usersWithPostCount" => $usersWithPostCount]);
    }
}
