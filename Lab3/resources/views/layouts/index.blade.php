@extends('layouts/main')

@section('page-title', 'All Posts')

@section('content')
    <table border="3px">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Enabled</th>
            <th>Published At</th>
            <th>Actions</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->enabled }}</td>
                <td>{{ $post->published_at }}</td>
                <td>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: red; color:white;">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('posts.edit', $post->id) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" style="background-color: blue; color:white;">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
