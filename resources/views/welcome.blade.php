<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vikrams Site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    </head>
    <body>
    <!--Navbar-->
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/sign') }}">sign-up/Sign-in</a>
                @endauth
            </div>
        @endif
        <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    </body>
</html>
