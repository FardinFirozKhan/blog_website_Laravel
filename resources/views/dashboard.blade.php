<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{asset('css/admin.css') }}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div class="main">
            <div class="sidebar">
                <img class="music_img" src="{{asset('images/music_black-background.jpg')}}" alt="">
                <li  @if($value == 0) class="active" @endif><a href="">SEE BLOGS</a></li>
                <li  @if($value == 1) class="active" @endif><a href="">POST BLOGS</a></li>
                <li  @if($value == 2) class="active" @endif><a href="">UPDATE BLOGS</a></li>
                <li  @if($value == 3) class="active" @endif><a href="">DELETE BLOGS</a></li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn" type="submit">Logout</button>
                </form>
            </div>
            <div class="contentbar">

            </div>
    </div>
</body>
</html>


