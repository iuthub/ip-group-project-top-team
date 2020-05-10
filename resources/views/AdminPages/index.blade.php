@extends('layouts.admin')


@section('title')

@endsection


@section('content')
    <h3>Statistics</h3>
    <div class="row justify-content-center">
        <div class="card text-white bg-primary m-lg-2 m-1 col-lg-4 col-5 col-md-4 col-sm-4" style="max-width: 18rem;">
            <div class="card-header">Users</div>
            <div class="card-body">
                <h5 class="card-title">Current status of Users</h5>
                <p class="card-text">You have 50 Users</p>
            </div>
        </div>
        <div class="card text-white bg-secondary m-lg-2 m-1 col-lg-4 col-5 col-md-4 col-sm-4" style="max-width: 18rem;">
            <div class="card-header">Posts</div>
            <div class="card-body">
                <h5 class="card-title">Current status of Posts</h5>
                <p class="card-text">You have 20 Posts</p>
            </div>
        </div>
        <div class="card text-white bg-success m-lg-2 m-1 col-lg-4 col-5 col-md-4 col-sm-4" style="max-width: 18rem;">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <h5 class="card-title">Current status of Categories</h5>
                <p class="card-text">20 Categories was added till now</p>
            </div>
        </div>
        <div class="card text-white bg-danger m-lg-2 m-1 col-lg-4 col-5 col-md-4 col-sm-4" style="max-width: 18rem;">
            <div class="card-header">Tags</div>
            <div class="card-body">
                <h5 class="card-title">Current status of Tags</h5>
                <p class="card-text">About 50 tags has been added till now</p>
            </div>
        </div>
        <div class="card text-white bg-warning m-lg-2 m-1 col-lg-4 col-5 col-md-4 col-sm-4" style="max-width: 18rem;">
            <div class="card-header">Reviews</div>
            <div class="card-body">
                <h5 class="card-title">Current status of Reviews</h5>
                <p class="card-text">Users added 20 reviews</p>
            </div>
        </div>
        <div class="card text-white bg-info m-lg-2 m-1 col-lg-4 col-5 col-md-4 col-sm-4" style="max-width: 18rem;">
            <div class="card-header">Sells</div>
            <div class="card-body">
                <h5 class="card-title">Current status of Sells</h5>
                <p class="card-text">20 Products were sold</p>
            </div>
        </div>
    </div>

@endsection
