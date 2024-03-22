@extends('main.app')

@section('title')
    Create
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
    
<form action="{{ route("posts.store") }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    {{-- <div class="mb-3">
        <label for="owner" class="form-label">Owner</label> 
        <select name="owner" id="owner" class="form-control"> 
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="mb-3">
        <label for="title" class="form-label">Title</label> 
        <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{old('title')}}"> 
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label> 
        <textarea name="description" class="form-control" id="description" placeholder="Description" rows="5">{{old('description')}}</textarea>
    <div class="mb-3">
        <label for="published_at" class="form-label">Published At</label> 
        <input name="published_at" type="date" class="form-control" id="published_at" value="{{old('published_at')}}"> 
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Add Image</label> 
        <input name="image" type="file" class="form-control" id="image" value="{{old('image')}}"> 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput5" class="form-label">Enabled</label>
        <input name="enabled" type="hidden" value="0"> 
        <input name="enabled" type="checkbox" value="1" id="Input5">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div>
</form>
@endsection
