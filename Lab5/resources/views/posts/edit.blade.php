@extends('main.app')

@section('title')
    Edit Post
@endsection

@section('content')
@if ($errors-> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route("posts.update", $post->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label for="Input2" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" value="{{ $post->title }}" id="Input2" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="Input3" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="Input3" placeholder="Description" rows="5">{{ $post->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="Input4" class="form-label">Updated At</label>
        <input name="updated_at" type="date" class="form-control" value="{{ $post->updated_at->format('Y-m-d') }}" id="Input4">
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="enabled" name="enabled" @if ($post->enabled) checked @endif>
        <label class="form-check-label" for="enabled">Enabled</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update Post</button>
    </div>
</form>
@endsection
