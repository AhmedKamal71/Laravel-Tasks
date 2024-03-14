<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route("edit.update",['id' => $post -> id])}}">
        <table>
            <tr>
                <td>
                    <label for="">Titles</label>
                    <input type="text" name="title" value="{{$post->title}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Body</label>
                    <input type="text" name="published" value="{{$post->body}}">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>