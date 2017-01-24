<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Demo</title>
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" >
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
    @yield('footer')
</html>
