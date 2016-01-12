<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ Theme::url('ico/favicon.ico') }}">

    <title>@section('title') {{ setting('core::site-name')}} @show</title>

    <!-- Bootstrap core CSS -->
    {!! Theme::style('css/bootstrap.css') !!}

            <!-- Custom styles for this template -->
    {!! Theme::style('css/style.css') !!}
    {!! Theme::style('css/font-awesome.min.css') !!}
    {!! Theme::style('vendor/media-element/mediaelementplayer.min.css') !!}


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>{!! Theme::script('js/ie8-responsive-file-warning.js') !!}<![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>

<body>

@include('partials.navigation')

@yield('content')

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ Theme::url('js/bootstrap.min.js') }}"></script>
<script src="{{ Theme::url('js/retina-1.1.0.js') }}"></script>
<script src="{{ Theme::url('js/jquery.hoverdir.js') }}"></script>
<script src="{{ Theme::url('js/jquery.hoverex.min.js') }}"></script>
<script src="{{ Theme::url('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ Theme::url('js/jquery.isotope.min.js') }}"></script>
<script src="{{ Theme::url('js/custom.js') }}"></script>
{!! Theme::script('vendor/media-element/mediaelement-and-player.min.js') !!}
@yield('scripts')
<?php if (Setting::has('core::google-analytics')): ?>
{!! Setting::get('core::google-analytics') !!}
<?php endif; ?>
</body>
</html>
