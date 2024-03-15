@extends('layouts/main')

@section('page-title', 'Edit Post')
    

@section('content')
    <form action="{{ route('edit.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3" required>{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="publishedAt">Published At</label>
            <input type="date" class="form-control" id="publishedAt" name="publish_at" value="{{ $post->publish_at }}" required>
        </div>
        <div class="form-group">
            <label for="publishedAt">Enabled</label>
            <input type="date" class="form-control" id="publishedAt" name="publish_at" value="{{ $post->publish_at }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
