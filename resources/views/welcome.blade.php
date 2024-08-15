<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family: "Times New Roman", Times, serif;
        }
           #d1{
            float: left;
            width:100%;
            margin-left:5%;
            padding: 5px 2px;
           }
           .div1{
            margin: 50px;
            background-color:white;
            border: none;
            border-radius:10px;
            padding:20px 5px;

           }
            .btn1{
            background-color: #04AA6D; /* Green */
            color: white;
            border: 1px solid black;
            border-radius: 8px;
            margin: 10px 0px;
            padding: 8px 10px;
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
            margin: 5px 2px;
            padding: 5px 8px;
            text-align: center;
            
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            }
            .btn2:hover{
                color: white;
                background-color: #3FA2F6;
                font-size: 16px;
            }
            .btn3{
                background-color: #e7e7e7; color: black;
            /* color: white; */
            border: 1px solid #04AA6D;
            border-radius: 8px;
            margin: 5px 2px;
            padding: 5px 8px;
            text-align: center;
            
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            transition: font-size 0.3s;
            }
            .btn3:hover{
                color: #111 ;
                background-color: #FF7777;
                font-size: 15px;
                /* border: 1px solid black; */
            }

            th{
            border: 1px solid white;
            background-color: #35374B; color: #FAFFAF;
            
            text-align: center;
            text-decoration: none;
            padding: 8px;
            font-size: 16px;
        }
        td{
            border: 1px solid white;
            background-color: #EEEDEB; color: black;
            padding: 8px;
            text-align: center;
            text-decoration: none;
            
            font-size: 16px;

        }
    </style>
</head>
<body>
   
        <div id="d1">
            <a href="{{route('blog.form')}}" class="btn1">Add Blog</a>
        </div>
        <br>
        <center>
        <div class="div1">
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
                        <a href="{{route('blog.edit_form',$data->id)}}" class="btn2">edit</a>
                        <a href="{{route('blog.delete',$data->id)}}" class="btn3">delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    

    </center>

    
        
</body>
</html>