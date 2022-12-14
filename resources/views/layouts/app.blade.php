<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config("app.name") }}</title>

    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Ecommerce styles -->
    <link rel="stylesheet" href="{{ asset('css/mdb.ecommerce.min.css')}}">
</head>
<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-envelope"></i> Contact
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-gear"></i> Settings</a>
            </li>
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Profile </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info"
                         aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#">My account</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input class="form-control" type="submit" value="Logout">
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
<!--/.Navbar -->
<main class="py-4">
    <div class="container">
        @auth
            {{--            @if($errors->any())--}}
            {{--                <ul class="list-group">--}}
            {{--                    @foreach($errors->all() as $error)--}}
            {{--                        <li class="alert alert-success" role="alert">--}}
            {{--                            {{ $error }}--}}
            {{--                        </li>--}}
            {{--                    @endforeach--}}
            {{--                </ul>--}}
            {{--            @endif--}}
            @if(session()->has("status"))
                <div class="alert alert-success" role="alert">
                    {{ session("status") }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('properties.index') }}"
                           class="list-group-item list-group-item-action active"
                           aria-current="true">
                            Properties
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        @else
            @yield("content")
        @endauth
    </div>
</main>
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>
</body>
</html>
