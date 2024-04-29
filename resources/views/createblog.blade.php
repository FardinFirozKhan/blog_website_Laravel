@extends('layout.dashboard')
                <div class="contentbar">
                <center><h1>Create A Blog</h1></center>
                <div>
                    
                    
                    @if ($value==2)
                    <div>
                        <center>
                            <form action="{{ route('edit', ['id' => $blog->blog_id]) }}"
                             method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Blog Title</label><br>
                                <input type="text" name="title" value="{{$blog->title}}"><br><br>
                                <label for="description">Description</label><br><br>
                                <textarea name="description" id="description" cols="30" rows="5">{{$blog->description}}</textarea><br><br>
                                <label for="blog">Write Full Blog</label><br><br>
                                <textarea name="blog" id="massage" id="" cols="30" rows="10">{{$blog->blog}}</textarea><br>
                                <br><br>
                                <label for="image">Upload Your Blog Image</label><br><br><br>
                                <input type="file" id="myFile" name="image" placeholder="{{$blog->img}}"><br><br><br>
                                <button class="contact_button">Submit</button>
                            </form>
                        </center>
                    </div>
                    @else
                    <div>
                        <center>
                            <form action="{{ route('postblog') }}"
                             method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Blog Title</label><br>
                                <input type="text" name="title"><br><br>
                                <label for="description">Description</label><br><br>
                                <textarea name="description" id="description" cols="30" rows="5"></textarea><br><br>
                                <label for="blog">Write Full Blog</label><br><br>
                                <textarea name="blog" id="massage" id="" cols="30" rows="10"></textarea><br>
                                <br><br>
                                <label for="image">Upload Your Blog Image</label><br><br><br>
                                <input type="file" id="myFile" name="image"><br><br><br>
                                <button class="contact_button">Submit</button>
                            </form>
                        </center>
                    </div>   
                    @endif
                        
                </div>


            </div>
        </div>
    </body>
</html>