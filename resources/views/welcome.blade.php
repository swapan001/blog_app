<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <center>
        <a href="{{route('blog.form')}}">Add Blog</a>
            <table>
                <tr>
                    <td>Sl.</td>
                    <td>title</td>
                    <td>short Description</td>
                    <td>long Description</td>
                    <td>Action</td>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->shortdes}}</td>
                    <td>{{$data->longdes}}</td>
                    <td>
                        <a href="{{route('blog.edit_form',$data->id)}}">edit</a>
                        <a href="{{route('blog.delete',$data->id)}}">delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
    </center>

    
        
</body>
</html>