<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        *{
            font-family: "Times New Roman", Times, serif;
        }
            body,html {
            margin: 0;
            font-family: Arial, sans-serif;
            height:100%;
            }
            body{
                display: flex;
                flex-direction: column;
            }
            .content{
                flex:1;
            }

            .btn1{
            background-color: #04AA6D; /* Green */
            color: white;
            border: 1px solid black;
            border-radius: 8px;
            margin: 10px 5px;
            padding: 10px 15px;
            text-align: center;
            
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            }
            .btn1:hover{
                color: #04AA6D;
                background-color: white;
                font-size: 16px;
            }
            .btn2{
            background-color: #9033ff; /* Green */
            color: white;
            border: 1px solid black;
            border-radius: 8px;
            margin: 10px 5px;
            padding: 10px 15px;
            text-align: center;
            
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            }
            .btn2:hover{
                color: white;
                background-color: #9033ff;
                font-size: 16px;
            }
            .btn3{
                background-color: #e7e7e7; color: black;
            /* color: white; */
            border: 1px solid #04AA6D;
            border-radius: 8px;
            margin: 5px 5px;
            padding: 6px 8px;
            text-align: center;
            
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            transition: font-size 0.3s;
            }
            .btn3:hover{
                color: #111 ;
                background-color: #F6F5F5;
                font-size: 15px;
                /* border: 1px solid black; */
            }
    </style>
</head>
</head>
<body>
<div class="content">
    <div class="n2">
                    @if (Route::has('login'))
                            <center>
                                @auth
                                    <a
                                        href="{{ route('dashboard') }}"
                                        class="btn2" 
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}" class="btn1">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn1"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </center>
                    @endif
                </div>
    <div class="d1">
        <hr>
        <div>
            <center><marquee behavior="scroll" direction="left" scrollamount="5" width="60%">Welcome to our Blog Web Plartform</marquee></center>
        </div>
        <hr>
        <br>
    </div>

    <div>
            <center>
                    <table>
                        <tr>
                            <th>Sl.</th>
                            <th>title</th>
                            <th>short Description</th>
                            <th>long Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->shortdes}}</td>
                            <td>{{$data->longdes}}</td>
                            <td>
                                <a class="btn3" href="#">ViewMore</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
            </center>
    </div>
    </div>
    @include('footer')

</body>

</html>