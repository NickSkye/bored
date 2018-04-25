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

        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        {{--<link rel="stylesheet" href="http://www.steinway.com/.resources/steinway-main-webapp/resources/css/new-main~2017-08-30-18-48-34-000~cache.css" media="all"/>--}}
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4176807311979814",
                enable_page_level_ads: true
            });
        </script>
    </head>
    @if(Request::is('/'))
        {{--DO SOMETHING--}}
    @endif

    <body >

        @yield('content')
        <footer>
            @include('partials.footer')
        </footer>
    </body>


</html>
