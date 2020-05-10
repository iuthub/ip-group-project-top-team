@extends('layouts.default')


@section('title')
    Search
@endsection


@section('content')


    <div class="container p-4">
        <p class="result">
            There are {{ $posts->count() }} results
        </p>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-xs-4 col-sm-4 col-lg-3 col-6 carousel-img mb-3">
                    <a href="/post/{{ $post->id }}"><img src="/img/posts/{{ $post->image }}" alt="" class="w-100"></a>
                    <div class="p-1">
                        <span>{{ $post->title }}</span>
                        <br>
                        @if($post->discount == 0)
                            <span class="h4 ">${{ $post->price }}</span>
                        @else
                            <span class="h4 ">${{ $post->price*(100 -$post->discount) / 100 }} </span> <span class="h6 text-muted ml-1"><del>${{ $post->price }}</del></span>
                        @endif
                        <form action="/korzina/" method="post">
                            @csrf
                            <div class="mt-1"><a href="#">
                                    <input hidden value="{{ $post->id }}" name="good_id">
                                    <input hidden value="1" name="count">
                                    <button type="submit" class="btn btn-outline-danger">Add to cart</button>
                                </a></div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
