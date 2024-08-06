<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <div style="height: 30px;"> 
        <a href="{{url('/login')}}">Login</a>
        <a href="{{url('/register')}}">Register</a>
    </div>
    <div class="d1">
        <div>
            <center><marquee behavior="" direction="">Welcome to our Blog Web Plartform</marquee></center>
        </div>
    </div>
    <center>
        
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
                        <a href="#">ViewMore</a>
                    </td>
                </tr>
                @endforeach
            </table>
    </center>
</body>
</html>