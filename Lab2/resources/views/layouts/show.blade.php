<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="3px">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Enabled</th>
            <th>Published AT</th>
        </tr>
        <tr>
            <td>{{$post -> id}}</td>
            <td>{{$post -> title}}</td>
            <td>{{$post -> body}}</td>
            <td>{{$post -> enabled}}</td>
            <td>{{$post -> published_at}}</td>
            <td>
                <button style="background-color: green; color:white; ">Edit</button>
            </td>
            <td>
                <button style="background-color: red; color:white; ">Delete</button>
            </td>
        </tr>
    </table>
</body>

</html>