@extends('layouts.default')


@section('title')
    Post
@endsection


@section('content')

            <div class="row p-1 mt-4 mb-3">
                <div class="col-lg-5 col-12 col-md-5">
                    <a href="#"><img src="/img/posts/{{ $post->image}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="col-lg-7 col-12 col-md-7">
                    <div class="container">
                        <h3 class="header">
                            {{ $post->title }}
                        </h3>

                        <div class="price">
                            @if($post->discount == 0)
                                <h4><b>${{ $post->price }}</b></h4>
                            @else
                                <h4><s>${{ $post->price }}</s><b> ${{ $post->price*(100 -$post->discount) / 100 }}</b></h4>
                            @endif
                        </div>
                    </div>
                    <div class="container">
                        <p class="text-product">
                            {{Str::limit($post ->description, $limit = 30, $end = '...')}}
                        </p>
                    </div>
                    <div class="container">
                        <form class="form-inline" action="/korzina/" method="post">
                            @csrf
                                <input type="hidden" value="{{ $post->id }}" name="good_id">
                                <input type="number" name="count" class="form-control m-2" step="1" min="1" max="{{ $post->count }}" value="1">
                                <button type="submit" class="btn btn-danger ml-2">Add to cart</button>
                        </form>
                    </div>
                    <div class="char p-4">
                        <p class="categ">
                            Category: <a href="/category/{{ $post->category_id }}">{{ $post->category->title }}</a>
                        </p>
                        <p>
                            Count: {{ $post->count }}
                        </p>
                        <p class="tag">
                            Tags: @foreach($post->tags as $tag) <a href="/tag/{{ $tag->id }}"> {{$tag->title}} </a> @endforeach
                        </p>
                    </div>
                </div>
            </div>

    <div class="container mb-5">
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                   aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                   aria-controls="reviews" aria-selected="false">Review({{ $comments->count() }})</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="Description">
                    <p>{{$post->description}}</p>
                </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="reviews">
                    <h5><b>Reviews ({{ $comments->count() }})</b></h5>
                    @if($comments->count() == 0)
                        <p>There are no reviews yet.</p>
                    @else
                        @foreach($comments as $comment)
                        <div class="row mb-2 h-50">
                            <div class="col-2 text-center"><img src="/img/user.png"><br><span class="text-danger">{{ $comment->user()->first()->name }}</span></div>
                            <div class="col-10">
                                <div style="height: 125px;" class="border-info border p-2">{{ $comment->content }}</div>
                            </div>
                        </div>
                            <hr>
                        @endforeach
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @auth
                    <form action="/post/{{$post->id}}/comments/" method="post">
                        @csrf
                    <div class="container p-1">
                        <p>Your review *</p>
                        <span class="border border-light">
           		            <textarea name="content" class="form-control" rows="6"></textarea>
           	            </span>

                        <button type="submit" class="btn btn-danger mt-1">Submit</button>
                    </div>
                    </form>
                    @else
                        <h2>You need to be authorized, to add comments!</h2>
                    @endauth
                </div>
            </div>
        </div>


    </div>
<hr>
    <h2 class="mb-3">Related products</h2>
    @include('sections.carousel', ['data'=>$related])
    <div class="mb-5"></div>

@endsection



