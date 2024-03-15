@extends('layouts/main')

@section('page-title', 'Create Post')
    
@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="publishedAt">Published At</label>
            <input type="date" class="form-control" id="publishedAt" name="published_at" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
