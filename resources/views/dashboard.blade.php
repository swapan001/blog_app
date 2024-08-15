
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .message{
            color: red;
        }
        .m1{
            margin-top:20px;
        }
    </style>
</head>
<body>
    
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Your Blog is Here . . .') }}
            </h2>
        </x-slot>

        <div class="m1">
            <div class="">
                <div class="">
                    
                <center>
                    @if(session('success'))
                        <div class="alert alert-success">
                            <br>
                            <hr>
                            <p class="message">{{ session('success') }}</p>
                            <hr>
                        </div>
                    @endif
                </center>
    <br>
                    @include('welcome')
                    <br>
                 
                
                </div>
            </div>
        </div>
    </x-app-layout>
    @include('footer')
</body>
</html>
