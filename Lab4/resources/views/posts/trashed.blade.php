@extends('main.app')

@section('title')
    Trashed
@endsection

@section('content')
    
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Owner</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Published At</th>
      <th scope="col">Enabled</th>
      <th scope="col" width="250px">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($trashedPosts as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ optional($post->user)->name }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>{{ $post->published_at }}</td>
      <td>{{ $post->enabled }}</td>
      <td>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a>
        <form style="display: inline" action="{{ route("posts.destroy", $post->id) }}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $posts->links() }}
@endsection
