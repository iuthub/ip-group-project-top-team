<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <script src="https://kit.fontawesome.com/a026d12758.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">

    <title>@yield('title')</title>
</head>
<body>

<div class="container mt-4">
    <header>
        @include('sections.nav')
        <div class="row mt-4 justify-content-lg-center">
            <div class="col-lg-3">
                <button class="btn btn-primary w-100" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">Shop by Category
                </button>
                <div class="collapse dropmenu" style="z-index: 1" id="collapseExample">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-2 mt-lg-0">
                <form>
                    <div class="row">
                        <div class="input-group col-lg-9 col-12">
                            <div class="input-group-prepend">
                        <span class="input-group-prepend">
                             <select class="custom-select">
                                        <option selected>All categories</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                             </select>
                        </span>
                            </div>
                            <input type="text" class="form-control"
                                   aria-describedby="inputGroupPrepend" required placeholder="Search Products. . .">
                        </div>
                        <div class="col-lg-3 col-12 mt-2 mt-lg-0">
                            <div class="btn btn-outline-primary w-100">Search</div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-2 mt-2 mt-lg-0 welcome">
                <div><img width="30px" src="{{ asset('img/icons/hi.svg') }}"> Welcome Guest!</div>
            </div>
        </div>
    </header>
    <!-- End of header  -->

    <div>
        @yield('content')
    </div>


    <footer>
        <div class="row bg-danger mt-2">
            <div class="col"><img src="{{ asset("img/logo.png") }}"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        <div class="row mt-5 p-2">
            <div class="col-lg-3 col-sm-6 col-6"><h5>Get to Know Us</h5>
                <ul class="">
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum dolor.</li>
                </ul>

            </div>
            <div class="col-lg-3 col-sm-6 col-6"><h5>Connect With US</h5>
                <ul class="">
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum dolor.</li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-6"><h5>Earning with Us</h5>
                <ul class="">
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum dolor.</li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 col-6"><h5>Let Us Help You</h5>
                <ul class="">
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum.</li>
                    <li>Lorem ipsum dolor.</li>
                </ul>
            </div>
        </div>

    </footer>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
</body>
</html>
