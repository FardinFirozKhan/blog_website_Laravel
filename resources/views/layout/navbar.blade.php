<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href={{asset('css/style.css') }}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
</head>
<body>
    <nav>
        <img class="music_img" src="{{asset('images/music_black-background.jpg')}}" alt="">
        <ul>
            <li><a href="{{url('/')}}" @if($value == 0) class="active" @endif>Home</a></li>
            <li><a href="{{ url('/about') }}" @if($value == 1) class="active" @endif>About</a></li>
            <li><a href="{{ url('/contact') }}" @if($value == 2) class="active" @endif>Contact</a></li>
        </ul>
    </nav>

