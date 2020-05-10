<div class="owl-carousel">
    @foreach($data as $info)
        <div class="carousel-img"><a href="/post/{{ $info->id }}"><img src="/img/posts/{{ $info->image }}"></a>
            <div class="p-1">
                <span>{{ $info->title }}</span>
                <br>
                @if($info->discount == 0)
                    <span class="h4 ">${{ $info->price }}</span>
                @else
                    <span class="h4 ">${{ $info->price*(100 -$info->discount) / 100 }} </span> <span
                        class="h6 text-muted ml-1"><del>${{ $info->price }}</del></span>
                @endif
                <form action="/korzina" method="post">
                    @csrf
                    <div class="mt-1"><a href="#">
                            <input hidden value="{{ $info->id }}" name="good_id">
                            <input hidden value="1" name="count">
                            <button type="submit" class="btn btn-outline-danger">Add to cart</button>
                        </a></div>
                </form>
            </div>
        </div>
    @endforeach
</div>

