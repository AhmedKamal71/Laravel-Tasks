<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("layouts.index", ["posts" => $posts]);
    }

    public function trashed()
    {
        // Soft delete posts where id > 80
        Post::where('id', '>', 80)->delete();
        $trashedPosts = Post::onlyTrashed()->get();
        return view("layouts.trash", ["posts" => $trashedPosts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view("layouts.show", ["post" => $post]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('layouts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function create()
    {
        return view('layouts.create');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    public function testMain()
    {
        return view("layouts.main");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'published_at' => 'required|date',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;
        $post->enabled = true;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
