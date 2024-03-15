@extends('layouts/main')
@section('page-title','Trashed Posts')
    

@section('content')
<table border="3px">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Enabled</th>
        <th>Published AT</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post -> id}}</td>
        <td>{{$post -> title}}</td>
        <td>{{$post -> enabled}}</td>
        <td>{{$post -> published_at}}</td>
        <td>
            <button style="background-color: green; color:white; ">Edit</button>
        </td>
        <td>
            <button style="background-color: red; color:white; ">Delete</button>
        </td>
    </tr>
    @endforeach
</table>
@endsection