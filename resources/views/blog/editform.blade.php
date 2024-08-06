<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddForm</title>
</head>
<body>
    <center>
        <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        </div>
        <form action="{{url('blog/update_blog',$post->id)}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            title: <input type="text" name="title" value="{{$post->title}}" required><br>
            shortdes: <input type="text" name="shortdes" id="" value="{{$post->shortdes}}" required><br>
            longdes: <input type="text" name="longdes" id="" required value="{{$post->longdes}}"><br>
            <input type="submit" value="update">
            
            <br>
        </form>
        <a href="{{route('home')}}">HOME</a>
    </center>
</body>
</html>