<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <h1>LOGIN</h1>
        <div class="center">
            {{ Form::open(array('url'=>'compte')) }}

                {{Form::label('email','Email Address')}}
                {{Form::email('email')}}

                {{Form::label('password','password')}}
                {{Form::password('password')}}<br><br>

                {{Form::submit('Sign up')}}
            {{ Form::close() }}
        </div>


    <h1>REGISTER</h1>

    <div class="center">
        {{ Form::open(array('url'=>'compte')) }}

            {{Form::label('email','Email Address')}}
            {{Form::email('email')}}

            {{Form::label('name','Name')}}
            {{Form::text('name')}}

            {{Form::label('password','password')}}
            {{Form::password('password')}}<br><br>

            {{Form::submit('Register')}}
        {{ Form::close() }}
    </div>
 
</body>
</html>