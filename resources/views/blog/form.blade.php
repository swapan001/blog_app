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
        <form action="{{url('blog/post_blog')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            title: <input type="text" name="title" required><br>
            shortdes: <input type="text" name="shortdes" id=""><br>
            longdes: <input type="text" name="longdes" id=""><br>
            <input type="submit" value="add">
            
            <br>
        </form>
        <a href="{{route('home')}}">HOME</a>
    </center>
</body>
</html>