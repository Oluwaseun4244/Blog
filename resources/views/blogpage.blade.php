<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="blogpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blog Page</title>
</head>

<body id="blog-body">

    <div class="header">
        <div class="header-h">
            <h1>Morroc Blog</h1>
        </div>

        <div class="list">
            <ul>
                <li><a href="http://127.0.0.1:8000/blogpage">Blog home <i class="fa fa-home"></i></a></li>
                <li><a href="http://127.0.0.1:8000/signup">SignUp <i class="fa fa-user-plus"></i></li>
                <li><a href="http://127.0.0.1:8000/createblog">Create or Post Blog <i class="fa fa-pencil"></i></a>
                </li>
            </ul>
        </div>
        <div id="marq">
            <marquee direction="right" style="color:white;">
                Morroc Blog is always here for you. Thank You!
                <i class="fa fa-smile fa-2x smiley"></i>
            </marquee>
        </div>

    </div>
    <div class="posts-housing">
       @foreach($blogContents as $blogContent)
        <div class="blog-card">
           <div class="card-pad">
            <div class="title">
                <h1 style="color: #7a6969;;">{{$blogContent->title}}</h1>
            </div>
            <div class="author-time">
                <p><i class="fa fa-user fa-1x"></i> <em style="color:#df4343;">By {{$blogContent->author}}</em> - {{ $blogContent->created_at }}</p>
            </div>
            <div class="content">
                <p>{{ $blogContent->content }}</p>
            </div>
         </div>
        </div>
        @endforeach

    </div>
    <div id="foot">
       <footer>
          <ul>
             <li><a href="#">About us</a></li>
             <li><a href="#">Contact us</a></li>
             <li><a href="#">Follow us on Twitter</a></li>
             <li><a href="#">Follow us on Meta</a></li>
             <li><a href="#">Follow us on Telegram</a></li>
          </ul>
       </footer>
    </div>
</body>

</html>



{{-- <div class="header">
    <div class="header-h">
        <h1>Best Blogging Site</h1>

    </div>
    <div class="list">
        <span><a href="http://127.0.0.1:8000/blogpage">Blog home <i class="fa fa-home"></i></a></span>
        <span><a href="http://127.0.0.1:8000/signup">SignUp <i class="fa fa-user-plus"></i></a></span>
        <span><a href="http://127.0.0.1:8000/createblog">Create or Post Blog<i
                    class="fa fa-plus-circle"></i></a></span>
    </div>
    <div id="marq">
        <marquee direction="right">Thanks for visiting Eazi Blog, we hope you enjoy your stay <i class="fa fa-smile fa-2x smiley"></i></marquee>

    </div>
</div>
<div id="blog-body">

    <div class="container">
        @foreach ($blogContents as $blogContent)
            <div class="blog-card">
                <div class="card">
                    <div class="blog-title">
                        <h2>...{{ $blogContent->title }}</h2>
                    </div>
                    <div class="name">
                        <h4>...{{ $blogContent->author }}| {{ $blogContent->created_at }}</h4>
                    </div>
                    <div class="blog-body">
                        <h3>{{ $blogContent->content }}</h3>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div> --}}
