<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - PCWEB5 Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <nav class="navbar navbar-light bg-warning">
        <h2 class="animate__animated animate__wobble">Horror Game Database 👻 </h2>
        <a href="{{ route('posts.index') }}" class="btn btn-dark">
            (All Posts)</a>

        <a href="   http://127.0.0.1:8000/about  " class="btn btn-danger text-white" role="button" aria-pressed="true">About </a>
        <a href="{{ route('posts.create')}}" class="btn btn-danger text-white" role="button" aria-pressed="true">New Post</a>

    </nav>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-16">
                    @if (session('notification'))
                    <div class="notification text-success">
                        {{ session('notification') }}
                    </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-danger text-white">
        <span> <strong> Horror Game Database </strong> 👻</span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>