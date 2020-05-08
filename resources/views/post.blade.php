@extends('layouts.default')


@section('title')
    Post
@endsection


@section('content')

            <div class="row p-1 mt-4 mb-3">
                <div class="col-lg-5 col-12 col-md-5">
                    <a href="#"><img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="..." class=""></a>
                </div>
                <div class="col-lg-7 col-12 col-md-7">
                    <div class="container">
                        <h3 class="header">
                            Quis Nostrum Exercitationem Ullamb
                        </h3>
                        <div class="product-nav">
    			        	    <span class="previous">
    			        		    <a href="#"></a>
    			        	    </span>
                            <span class="next">
    			        		    <a href="#"></a>
    			        	    </span>
                        </div>
                        <div class="price">
                            <h4><s>£160.00</s><b> £135.00</b></h4>
                        </div>
                    </div>
                    <div class="container">
                        <p class="text-product">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip commodo consequat.
                        </p>
                    </div>
                    <div class="container">
                        <form class="form-inline">
                                <input type="number" class="form-control m-2" step="1" min="1" name="quantity" value="1">
                                <a href="#" class="btn btn-danger ml-2">Add to cart</a>
                        </form>
                    </div>
                    <div class="char p-4">
                        <p class="model">
                            SKU: MOL85-3
                        </p>
                        <p class="categ">
                            Categories: Accessories Parts, Books, Entertainment, Home & Garden, Kitchen, Music, Sandals
                        </p>
                        <p class="tag">
                            Tags: Summer, Tattoo Kits
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
                <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab"
                   aria-controls="information" aria-selected="false">Additional information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                   aria-controls="reviews" aria-selected="false">Contact</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="Description">
                    <h5><b>Paragraph text</b></h5>
                    <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod
                        tellus. Nam
                        mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget
                        sem
                        auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum.
                        Aliquam
                        pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla
                        facilisi.
                        In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>

                    <h5><b>Unordered list</b></h5>
                    <ul>
                        <li type="disk">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Maecenas ullamcorper est et massa mattis condimentum.</li>
                        <li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>
                        <li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>
                        <li>Mauris eget diam magna, in blandit turpis.</li>
                    </ul>

                    <h5><b>Ordered list</b></h5>
                    <ol type="1">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Maecenas ullamcorper est et massa mattis condimentum.</li>
                        <li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>
                        <li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>
                        <li>Mauris eget diam magna, in blandit turpis.</li>
                    </ol>
                    <p>In cursus faucibus tortor eu vestibulum. Ut eget turpis ac justo porta varius. Donec vel felis
                        ante, ac
                        vehicula ipsum. Quisque sed diam metus. Quisque eget leo sit amet erat varius rutrum vitae
                        dapibus
                        lectus. Vivamus et sapien ante. Suspendisse potenti. Fusce in tellus est, ac consequat lacus.
                        Nulla
                        risus massa, commodo in imperdiet ut, ornare in leo. Duis pellentesque sagittis lorem, sed
                        mollis lorem
                        venenatis id.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                <div class="add_info xs">
                    <h5><b>Additional Information</b></h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Weight</th>
                            <th scope="col">56 kg</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">Dimensions</th>
                            <th scope="col">122 × 121 × 451 cm</th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="reviews">
                    <h5><b>Reviews (0)</b></h5>
                    <p>There are no reviews yet.</p>
                    <strong>Be the first to review “quis nostrum exercitationem ullamb”</strong>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <div class="container p-1">
                        <p>Name</p>
                        <form class="form-inline my-lg-0">
                            <input type="text" class="form-control mr-sm-2" placeholder="" aria-label="Name">
                        </form>
                    </div>
                    <div class="container p-1">
                        <p>Email</p>
                        <form class="form-inline my-lg-0">
                            <input type="text" class="form-control mr-sm-2" placeholder="" aria-label="Email">
                        </form>
                    </div>
                    <div class="save">
                        <label><input type="checkbox" name="save"> Save my name, email, and website in this browser for
                            the next
                            time I comment.</label>
                        <p>Your rating</p>
                        <p>Your review *</p>
                        <span class="border border-light">
           		            <textarea class="form-control" rows="6"></textarea>
           	            </span>

                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
<hr>
    <h2 class="mb-3">Related products</h2>
    @include('sections.carousel')
    <div class="mb-5"></div>

@endsection



