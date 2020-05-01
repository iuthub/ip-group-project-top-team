@extends('layouts.default')


@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="offset-lg-3 col-lg-9 mt-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/banners/banner-01.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/banners/banner-01.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

    <!-- End of carousel  -->

    <div class="row mt-3">
        <div class="col-lg-4 col-12 col-md-12 col-sm-12 align-items-center">
            <div class="card mb-3 p-2" style="max-width: 540px;">
                <div class="row no-gutters text-center align-items-lg-center">
                    <div class="col-md-2">
                        <i class="fas fa-smile text-danger h1"></i>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">100% Satisfaction</h5>
                            <p class="card-text">If you are unable</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card mb-3 p-2" style="max-width: 540px;">
                <div class="row no-gutters text-center align-items-lg-center">
                    <div class="col-md-2">
                        <i class="fas fa-heart text-danger h1"></i>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Save 20% when you</h5>
                            <p class="card-text">Use credit card</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card mb-3 p-2" style="max-width: 540px;">
                <div class="row no-gutters text-center align-items-lg-center">
                    <div class="col-md-2">
                        <i class="fas fa-dolly-flatbed text-danger h1"></i>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">Fast Free Shipment</h5>
                            <p class="card-text">Load any computer’s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of header section -->

    <div class="row ">
        <div class="col-lg-6 mt-2">
            <div class="card bg-white border-white text-dark">
                <img src="{{ asset('img/banners/Sub-banner-01.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <p class="card-text h2">Google Extraodinary<br> 40% Flat</p>
                    <br>
                    <p class="card-text">For New Customer Only</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-2">
            <div class="card bg-white border-white text-dark">
                <img src="{{ asset('img/banners/Sub-banner-02.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <p class="card-text h2">Google Extraodinary<br> 40% Flat</p>
                    <br>
                    <p class="card-text">For New Customer Only</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Best Deals Ever</h2>

    @include('sections.carousel')


    <div class="row mt-4">
        <div class="col-lg-8 mt-2">
            <div class="card bg-white border-white text-dark">
                <img src="{{ asset('img/banners/Sub-banner-03.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <p class="card-text h2">Google Extraodinary<br> 40% Flat</p>
                    <br>
                    <p class="card-text">For New Customer Only</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-2">
            <div class="card bg-white border-white text-dark">
                <img src="{{ asset('img/banners/Sub-banner-05.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <p class="card-text h2">Google Extraodinary<br> 40% Flat</p>
                    <br>
                    <p class="card-text">For New Customer Only</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Featured Products</h2>

    @include('sections.carousel')

@endsection
