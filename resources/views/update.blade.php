@extends('layout.dashboard')
                <div class="contentbar">
                <center><h1>YOUR BLOGS</h1></center>
                <div class="card-item">
                    @foreach($blogs as $blog)

                    <div class="cards">
                        <center><div class="card_img">
                                    <img class="music_img" src="{{ asset($blog->img) }}" alt="">
                                </div>
                                <div class="card_content">
                                    <h3><a href="{{ route('read', ['id' => $blog->blog_id]) }}">{{ $blog->title }}</a></h3>
                                    <p>{{$blog->description}}</p>
                                </div>
                        </center>
                    </div>          
                    @endforeach
                </div>


            </div>
        </div>
    </body>
</html>