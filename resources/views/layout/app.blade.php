<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="{{asset('/css/app.css')}}" rel="stylesheet">
        
        <title> {{config('app.name', 'Armin Laravel Application')}} </title>

    </head>
    <body>

        @include('inc/navbar')

        <div class="container">
            @include('inc/messages')
            @yield('content')

        </div>

    </body>
</html>
