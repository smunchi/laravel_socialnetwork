<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::to('css/style.css')}}"
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <style>
            .container {
                max-width: 700px;
            }
        </style>
    </head>
    <body>
        @include('includes/header')
        <div class="container">            
            @yield('content')
        </div>
    </body>
</html>
