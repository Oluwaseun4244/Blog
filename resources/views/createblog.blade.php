<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="createblog.css">
    <title>Create Blog</title>
</head>

<body id="body">
    <div id="header">
    <div id="home">
        <h3><a style="color: black; text-decoration:none; " href="http://127.0.0.1:8000/blogpage">Blog Home <i class="fa fa-home"></i></a></h3>
    </div>
    <div id="blog">
        <h3><a style="color: black; text-decoration:none; " href="http://127.0.0.1:8000/signup">Sign Up <i class="fa fa-user-plus"></i></a>
    </div>
    </div>
    <div id="img" class="container">
       {{-- <div class="side-img">
         <img src="./images/chat-icon.png" alt="">
       </div> --}}
       
        <div class="blog-post">
           @if ($message = Session::get("Posted"))

            <h2>{{$message}}</h2>
            <a style="text-decoration:none;" href="http://127.0.0.1:8000/blogpage"><h3>Proceed to view posted blogs</h3></a><br><br>
         <a style="text-decoration:none;" href="http://127.0.0.1:8000/createblog"></h3>Post another</h3></a>
            @else
            <form action="" METHOD="POST">
                @csrf
                <h3>Blog Author</h3>
                <div>
                <div class="dropdown">
                   <strong><span>SELECT AUTHOR </span></strong> <div class="box bounce-1"><i class="fa fa-arrow-down fa-1x"></i></div>
                   <div class="hidden-select">
                    <select name="author" id="select">
                        {{-- <option value="">SELECT AUTHOR</option> --}}
                        <option value="Anonymous">Anonymous</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->firstname }} {{ $author->lastname }}"><strong>{{ $author->firstname }}
                              {{ $author->lastname }}</strong></option>
                        @endforeach
                    </select><br><br>
                  </div>
                </div>
               </div>
                <label><strong>Blog Title</strong></label><br>
                <input type="text" name="title" id="blog-title-input" placeholder="Blog Title"><br><br>
                <label><strong>Blog Content</strong></label><br>
                <textarea type="text" id="textarea" name="content" placeholder="What's on your mind?"></textarea><br><br>
                <button id="post-btn" name="post">Post Blog</button>
            </form>
            <div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <h2 style="color:white; background-color:red;">{{ $error }}</h2>
                        
                    @endforeach
                @endif
            </div>
        </div>
        @endif
    </div>



</body>

</html>
