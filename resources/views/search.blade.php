@extends('layouts.default')


@section('title')
    Search
@endsection


@section('content')
     <div class="container-fluid p-3">
     	<p class="result">
     		Showing 1-12 of 20 results
     	</p>
     	<form class="order">
     		<select>
     		    <option value="relevance" selected="selected">Relevance</option>
     		    <option value="popularity">Sort popularity</option>
     		    <option value="rating">Sort by average rating</option>
     		    <option value="latest">Sort by latest</option>
     		    <option value="price1">Sort by price: low to high</option>
     		    <option value="price2">Sort by price: high to low</option>
     	    </select>	   	   
     </div>

     <div class="container">
     	<div class="row text-center justify-content-center">
     	  <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/7.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$100.00</span><s>$90.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/8.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$110.00</span><s>$100.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/9.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$120.00</span><s>$110.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/10.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$130.00</span><s>$120.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/11.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$140.00</span><s>$130.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/12.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$150.00</span><s>$140.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/13.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$160.00</span><s>$150.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/14.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$170.00</span><s>$160.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/15.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$180.00</span><s>$170.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/16.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$190.00</span><s>$180.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/17.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$200.00</span><s>$190.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-3"> 
     	  	<img src="{{ asset('img/catalog/18.jpg') }}" alt="" class="w-100">  	
            <div class="p-1">
            <span>Lorem ipsum dolor sit amet, consectetur.</span>
            <br><span class="h6">$210.00</span><s>$200.00</s>
            <div class="mt-1"><button class="btn btn-outline-danger">Add to cart</button></div>
            </div>
          </div>

        </div>
     </div>
@endsection
