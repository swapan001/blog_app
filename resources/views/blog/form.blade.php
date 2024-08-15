<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddForm</title>
    <style>
        #main{
            margin: 20px;
            padding: 30px;
            background-color: white;
            width: 40%;
            border-radius:5%;
            box-shadow: 10px #FFB996;
        }
        div{
            padding:10px;
            margin: 5px;
            border: blue 2px;
        }
        .d1{
            display:inline-block;
            padding:10px;
            margin: 5px;
        }
        .btn1{
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            text-decoration: none;
            display: inline-block;
            opacity: 80%;
            border-radius: 8px;
            margin: 10px 5px;
            padding: 10px 15px;
            text-align: center;
            font-size: 15px;
        }

        .btn1:hover{
            opacity: 100%;
            background-color:black ;
            font-size:16px;
        }
        .btn2:hover{
            opacity: 100%;
        }
        .btn2{
            background-color: #5BBCFF; /* Green */
            border: none;
            color: white;
            text-decoration: none;
            display: inline-block;
            opacity: 80%;
            border-radius: 8px;
            margin: 10px 5px;
            padding: 10px 15px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>
<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Add new blog . . .') }}
            </h2>
        </x-slot>
        <br>
    <center>
        <form action="{{url('blog/post_blog')}}" method="post">
            @csrf
            <div id="main">
                 <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div>title: <input type="text" name="title" required><br></div>
                <div>shortdes: <input type="text" name="shortdes" id="" required><br></div>
                <div>longdes: <textarea name="longdes" id=""></textarea><br></div>
                
               <div class="d1">
                    <input type="submit" value="add" class="btn1">
                    <a href="{{route('home')}}" class="btn2">HOME</a>
                    <br>
                </div>
            </div>

        </form>
       
    </center>
    </x-app-layout>
        @include('footer')
</body>
</html>