<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="signup.css">
    <title>SignUp</title>
</head>

<body id="body">
    <div class="home-blog">
        <div id="signup-head">
            <h3><a style="color: black; text-decoration:none; " href="http://127.0.0.1:8000/blogpage">Blog Home <i class="fa fa-home"></i></a></h3>
        </div>
        <div id="signup-head2">
            <h3><a style="color: black; text-decoration:none; " href="http://127.0.0.1:8000/createblog">Post Blog <i class="fa fa-pencil"></i></a>
            </h3>
        </div>
    </div>
    <div class="container">
        {{-- <div id="logo"><img src="./images/eaziblog.png" alt=""></div> --}}

        <div class="left">

            {{-- <i class="fa fa-home fa-2x"> --}}
            <div class="sign-up">
                @if ($message = Session::get('Created'))

                    <h1 style="color:green;">{{ $message }}</h1> <br><br><br>
                    <h4><a href="http://127.0.0.1:8000/createblog">Click here to post blog</a></h4> <br><br><br>
                    <h4><a href="http://127.0.0.1:8000/signup">Return to signup page</a></h4>

                @else

                    <h2>SIGN UP</h2>

                    <form action="/signup" method="POST">
                        @csrf
                        <label>First Name</label><br>
                        <input placeholder="First Name" class="input1" type="text" name="firstName" required><br>
                        <label>Last Name</label><br>
                        <input placeholder="Last Name" class="input1" type="text" name="lastName" required><br>
                        <label>Email</label><br>
                        <input placeholder="example@email.com" class="input1" type="email" name="email"
                            required><br><br>
                        <button class="Sign-up-btn" name="submit">Sign Up</button>

                    </form>

            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>
                        <p class="danger">{{ $error }}</p>
                    </div>

                @endforeach

            @endif

            @endif
        </div>
    </div>
</body>

</html>
