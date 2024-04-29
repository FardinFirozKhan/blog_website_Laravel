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
                                    <p class="cardBlog">{{$blog->description}}</p>
                                    @if($value == 2)  
                                    <button class="update_btn"><a href="{{ route('update', ['id' => $blog->blog_id]) }}">Update</a></button>
                                    @endif
                                    @if($value == 3)  
                                    <button class="delete_btn"><a href="{{ route('delete', ['id' => $blog->blog_id]) }}">Delete</a></button>
                                    @endif
                                </div>
                        </center>
                    </div>          
                    @endforeach
                </div>


            </div>
        </div>
    </body>
</html>