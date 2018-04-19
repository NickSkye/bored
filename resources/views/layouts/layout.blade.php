<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head >




        <meta name=“description” content="bored"/>
        <meta name=“keywords” content="bored, website, random"/>
        <meta name="author" content="Intelliskye, LLC"/>
        <link rel="canonical" href="https://cuzyourebored.com/"/>
        <meta name="dc.language" content="en">
        <meta http-equiv="Content-Language" content="en">

            <link rel="publisher" href="https://intelliskye.com/" />
            <meta name="robots" content="all"/>
            <meta name="robots" content="index, follow"/>
            <meta name="revisit-after" content="4 days"/>
            <title>CuzYou'reBored</title>







        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/intelliskyeicon.png') }}">
        {{--<title>IntelliSkye</title>--}}

        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(app()->isLocal())
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @else
            <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @endif

        @if(app()->isLocal())
            <script src="{{ asset('js/app.js') }}"></script>
        @else
            <script src="{{ mix('js/app.js') }}"></script>
        @endif
        <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6715694/6200752/css/fonts.css"/>

        {{--<link rel="stylesheet" href="http://www.steinway.com/.resources/steinway-main-webapp/resources/css/new-main~2017-08-30-18-48-34-000~cache.css" media="all"/>--}}
    </head>
    @if(Request::is('/'))
        {{--DO SOMETHING--}}
    @endif

    <body >

        @yield('content')
        <footer>

        </footer>
    </body>


</html>
