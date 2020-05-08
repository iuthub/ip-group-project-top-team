

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" style="width: 23%;"  href="/"><img width="50%" src="{{ asset('img/logo.png') }}"></a>
    <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active w-100 text-center">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item text-center" >
                <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="#">lorem</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="#">Ipsum</a>
            </li>

        </ul>
    </div>
    <ul class="nav ">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img height="28px" src="{{ asset("img/icons/user.svg") }}">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @guest
                    <a class="dropdown-item" href="{{ url('login') }}">Login</a>
                    <a class="dropdown-item" href="{{ url('register') }}">Authorization</a>
                @endguest
                @auth
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><img height="28px" src="{{ asset("img/icons/wish.svg") }}"><span class="badge badge-pill badge-danger">0</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img height="28px" src="{{ asset("img/icons/cart.svg") }}"><span class="badge badge-pill badge-danger">0</span>
            </a>
            <div class="dropdown-menu" style="margin-left: -40px;" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </li>
    </ul>
</nav>
