<div class="owl-carousel">
    <div> <img src="{{ asset('img/catalog/14.jpg') }}">
        <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$100.00</span>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
        </div>
    </div>
    <div> <img src="{{ asset('img/catalog/15.jpg') }}">
        <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$100.00</span>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
        </div>
    </div>
    <div> <img src="{{ asset('img/catalog/16.jpg') }}">
        <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$100.00</span>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
        </div>
    </div>
    <div> <img src="{{ asset('img/catalog/17.jpg') }}">
        <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$100.00</span>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
        </div>
    </div>
    <div> <img src="{{ asset('img/catalog/18.jpg') }}">
        <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$100.00</span>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        })
    });
</script>
