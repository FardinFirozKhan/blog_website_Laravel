<div class="sidebar">
    <img class="music_img" src="{{asset('images/music_black-background.jpg')}}" alt="">
    <li  @if($value == 0) class="active" @endif><a  href="{{ url('/dashboard') }}" >SEE BLOGS</a></li>
    <li  @if($value == 1) class="active" @endif><a  href="{{ url('/postblog') }}">POST BLOGS</a></li>
    <li  @if($value == 2) class="active" @endif><a  href="{{ url('/updateblog') }}">UPDATE BLOGS</a></li>
    <li  @if($value == 3) class="active" @endif><a  href="{{ url('/deleteblog') }}">DELETE BLOGS</a></li>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn" type="submit">Logout</button>
    </form>
</div>