@extends('main.app')

@section('title')
    User Posts
@endsection

@section('content')
    <div class="container">
        <h1>User-wise Post Counts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Number of Posts</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usersWithPostCount as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->posts_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
