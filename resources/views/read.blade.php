@extends('layout.dashboard')
<div class="contentbar">
    <div class="">
        <center>
            <h3>{{ $blog->title }}</h3>
            <div class="card_img">
                <img class="blog_img" src="{{ asset($blog->img) }}" alt="">
            </div>
            <div class="">        
                <p class="mainBlog">{{ $blog->blog }}</p>
            </div>
        </center>
    </div>
</div>
</div>
</body>
</html>