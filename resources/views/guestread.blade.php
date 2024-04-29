<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
        
            body {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
            }

            .main {
                padding: 0 10%; 
                width: 80%;
                float: none;
                align-items: center;
            }
            .main p {
                text-align: justify;
                line-height: 1.6;
                margin: 0; 
            }
        </style>
    </head>
    <body>
    <div>
        <center>
            <div class="main">
                <h3>{{ $blog->title }}</h3>
                <div class="">
                    <img class="blog_img" src="{{ asset($blog->img) }}" alt="">
                </div>
                <div class="">        
                    <p>{{ $blog->blog }}</p>
                </div>
            </div>
        </center>
    </div>
    </body>
    </html>