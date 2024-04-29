@extends('layout.main')

@section('main')
<div class="home">
    <div class="content">
        <h1>MUSIC NEWS FOR YOU</h1>
        <p>If you want to be the first to read the freshest news from the poprock music world, 
            you came to the right place. My name is Dave and I will be your guide in the world of 
            poprock new releases, artists, bands and events.</p>
        <hr>
        @foreach ($blogs as $blog)
        <div class="cards">
            <div class="card_img">
                <img class="music_img" src="{{ asset($blog->img) }}" alt="">
            </div>
            <div class="card_content">
                <h3><a href="{{ route('guestread', ['id' => $blog->blog_id]) }}">{{$blog->title}}</a></h3>
                <p style="color: grey;">{{ $blog->user->name }}</p>
                <p>{{$blog->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
@endsection