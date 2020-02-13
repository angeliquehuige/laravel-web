<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Angie's Portfolio - Home</title>
    <link rel="stylesheet"
          href="{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat:200,400,600&display=swap') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
</head>

<body>
<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a href="/"><img class="logo" src="\assets\img\logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path() === "/" ? "active" : "" }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ Request::path() === "dashboard" ? "active" : "" }}">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item {{ Request::path() === "profile" ? "active" : "" }}">
                    <a class="nav-link" href="/profile">About</a>
                </li>
                <li class="nav-item {{ Request::path() === "article" ? "active" : "" }}">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

{{--        <a class="{{ Request::path() === "/" ? "active" : "" }}" href= "/">home</a>--}}
{{--        <a class="{{ Request::path() === "profile" ? "active" : "" }}" href= "/profile">profile</a>--}}
{{--        <a class="{{ Request::path() === "dashboard" ? "active" : "" }}" href= "/dashboard">dashboard</a>--}}
{{--        <a class="{{ Request::path() === "article" ? "active" : "" }}" href= "/blog">blog</a>--}}

@yield("content")

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
