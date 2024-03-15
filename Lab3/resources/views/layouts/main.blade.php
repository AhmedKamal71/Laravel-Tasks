<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="boot">

</head>
<body>
    <div class="navbar">
        @section('navbar')
        <ul class="navbarList">
            <li class=""><a href="">Home</a></li>
            <li class=""><a href="http://127.0.0.1:8000/posts">Show All</a></li>
            <li class=""><a href="http://127.0.0.1:8000/trash">Trashed</a></li>
            <li class=""><a href="http://127.0.0.1:8000/new">Add</a></li>
        </ul>
        @show
    </div>
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>

<style>
    ul{
        display: flex;
        flex-direction: row;
        width:500px;
        list-style: none;
    }

    li{
        width: 100px;
    }

    a{
        text-decoration: none;
        color: black; 
        font-weight: bold;  
    }
    .navbar{
        background-color: rgb(200, 213, 213);
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;    
        color: black;    
    }
    a:hover{
        color: red;
    }
</style>