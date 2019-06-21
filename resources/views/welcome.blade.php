<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    </head>
    <body>

        <div id="parallax-container">
            <div style="background: url(https://cdn2.hubspot.net/hubfs/1951013/Parallax/SkyBG.png);"></div>
            <div style="background: url(https://cdn2.hubspot.net/hubfs/1951013/Parallax/Clouds1.png);"></div>
            <div style="background: url(https://cdn2.hubspot.net/hubfs/1951013/Parallax/Clouds2.png);"></div>
            <div style="background: url(https://cdn2.hubspot.net/hubfs/1951013/Parallax/Clouds3.png);"></div>
            <div style="background: url(https://cdn2.hubspot.net/hubfs/1951013/Parallax/Moon.png)"></div>
            <div style="background: url(https://cdn2.hubspot.net/hubfs/1951013/Parallax/Hill.png)"></div>

            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/sign') }}">sign-up/Sign-in</a>
                    @endauth
                </div>
            @endif
        </div>

        </div>
        
        <div id="content">
            <div style="height: 2000px;">
            <!--Content-->
            </div>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    </body>
</html>
