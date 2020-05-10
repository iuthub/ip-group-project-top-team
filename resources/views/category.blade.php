@extends('layouts.default')


@section('title')
    Search
@endsection


@section('content')


    <div class="container p-4">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-xs-4 col-sm-4 col-lg-3 col-6 carousel-img mb-2">
                    <a href="/post/{{ $post->id }}"><img src="/img/posts/{{ $post->image }}" alt="" class="w-100"></a>
                    <div class="p-1">
                        <span>{{ $post->title }}</span>
                        <br>
                        @if($post->discount == 0)
                            <span class="h4 ">${{ $post->price }}</span>
                        @else
                            <span class="h4 ">${{ $post->price*(100 -$post->discount) / 100 }} </span> <span class="h6 text-muted ml-1"><del>${{ $post->price }}</del></span>
                        @endif
                        <div class="mt-1">
                            <button class="btn btn-outline-danger">Add to cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
