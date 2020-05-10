<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FontAwesome Stylesheet -->
    <script src="https://kit.fontawesome.com/a026d12758.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
</head>
<body style="background-color: #EBF0F0">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="/"><img class="w-50" src="{{asset('img/logo.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin') }}">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Go to main page</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="row mt-2">
    <div class="sidebar col-lg-3 col-md-3 col-12">
        <ul class="list-group ml-0 ml-lg-1">
            <a href="{{ route('good-list') }}" class="card-link" style="margin-left: 1.25rem;">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Posts
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
            </a>
            <a href="{{ route('tag-list') }}" class="card-link">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tags
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
            </a>
            <a href="{{ route('category-list') }}" class="card-link">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Categories
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </a>
            <a href="#" class="card-link">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Reviews
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </a>

            <a href="#" class="card-link">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sells
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </a>

            <a href="{{ route('user-list') }}" class="card-link">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Users
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </a>
        </ul>
    </div>
    <div class="content col-lg-9 col-md-9 col-12">
        <div class="container">
            @yield('content')
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12 text-center mb-1">© Admin Dashboard Panel 2020</div>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
