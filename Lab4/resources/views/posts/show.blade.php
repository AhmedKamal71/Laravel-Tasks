@extends('main.app')
@section('title')
    show
@endsection

@section('content')
  <div class="card text-bg-primary mb-3 mt-4 " style="max-width: 18rem;">
    <div class="card-header">Owner</div>
    <div class="card-body">
      <h5 class="card-title">{{$post->user->name}}</h5>
    </div>
  </div>
  <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
    <div class="card-header">Title</div>
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
    </div>
  </div>
  <div class="card text-bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Description</div>
    <div class="card-body">
      <h5 class="card-title">{{$post->description}}</h5>
    </div>
  </div>
@endsection