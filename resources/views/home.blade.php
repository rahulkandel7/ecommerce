@extends('layouts.app')

@section('content')
{{-- Slide Show Content --}} 
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1623003641967-c43abbede243?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1502&q=80" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated animate__backInDown">Summer Sale</h5>
          <p class="animate__animated animate__heartBeat animate__delay-1s">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1599940676457-cae80eebdcd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated animate__backInDown">Second slide label</h5>
          <p class="animate__animated animate__heartBeat animate__delay-1s">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1599834017599-d540b5fa8cf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated animate__backInDown">Third slide label</h5>
          <p class="animate__animated animate__heartBeat animate__delay-1s">Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

   {{-- Choose Section --}}
<div class="container">
  <div class="row mt-4 mb-4">
    <div class=" col-md-6 mb-4">
        <div class="banner">
          <img src="{{ asset('images/women.jpg') }}" alt="" class="w-100" height="100%">
          <div class="banner-location">
              <h1 class="ml-4">Women</h1>
          </div>
          <div class="banner-overlay container">
              <div class="banner-link">
                <a href="">Shop Now</a>
              </div>
          </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="banner">
        <img src="{{ asset('images/men.jpg') }}" alt="" class="w-100" height="100%">
        <div class="banner-location">
          <h1 class="ml-4">Men</h1>
        </div>
        <div class="banner-overlay container">
          <div class="banner-link">
            <a href="">Shop Now</a>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>

   {{-- Product Overview Section --}}
<div class="container mt-3">
  <h2 class="product-overview">
    Product Overview
  </h2>

  <div class="row">
    <div class="col-md-8">
      <div class="d-flex justify-content-start">
        <ul class="product-items pt-1">
          <li class="mr-3"> 
            <form action="{{route('allproduct')}}" method="get">
              <button type="submit" class="product-link {{ Route::currentRouteNamed('allproduct') ? 'active' : '' }}" name="search" value="all-products">
               All Products
              </button>
             </form>
          </li>
          <li class="mr-3"> 
            <form action="{{route('men')}}" method="get">
              
              <button type="submit" class="product-link {{ Route::currentRouteNamed('men') ? 'active' : '' }}" name="search" value="male">
               Mens
              </button>
             </form>
          </li>
          <li class="mr-3"> 
            <form action="{{route('women')}}" method="get">

              <button type="submit" class="product-link {{ Route::currentRouteNamed('women') ? 'active' : '' }}" name="search" value="female">
               Womens
              </button>
             </form>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
        <p>
          <button class="btn btn-outline-primary filter" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Filter <i class="fas fa-sort-amount-down-alt ml-1"></i>
          </button>
       
          <button class="btn btn-outline-primary filter ml-4" type="button" data-toggle="collapse" data-target="#searchExample" aria-expanded="false" aria-controls="searchExample">
            Search <i class="fas fa-search ml-2"></i>
          </button>
        </p>
      
    </div>
  </div>
    {{-- Filter--}}
    <div class="collapse mb-3" id="collapseExample">
      <div class="card card-body filter-card">
        <div class="row">
          <div class="col-md-6">
              <h4 class="filter-heading">Price</h4>
              <ul class="price-sort mt-2">
                <li><a href="">All</a></li>
                <li><a href="">0 - 2000</a></li>
                <li><a href="">2000 - 4000</a></li>
                <li><a href="">4000+</a></li>
              </ul>
          </div>
          <div class="col-md-6">
            <h4 class="filter-heading">Tags</h4>
            <div class="row mt-2">
              @foreach ($categories as $category)
                <div class="col-auto mb-3">
                  
                  <a href="" class="filter-btn mb-3">{{$category->name}}</a>
                </div>
              @endforeach
            </div>
             
          </div>
        </div>
  
      </div>
    </div>
  
    {{-- Search--}}
  <div class="collapse mb-3" id="searchExample">
    <div class="card card-body filter-card">
      <form action="{{route('search')}}" method="get">
        <label class="sr-only" for="search">Search</label>
        <div class="input-group mb-2 mr-sm-2">
          
          <input type="text" class="form-control" id="search" placeholder="Search Product" name="q" value="{{request('q')}}">
            <div class="d-flex justify-content-end" >
              <button class="btn btn-outline-primary filter ml-4" type="submit" style="margin-left: 0 !important;">
                Search <i class="fas fa-search ml-2"></i>
              </button>
            </div>
            
        </div>
        
      </form>

    </div>
  </div>
</div>

{{--Product list --}}
<div class="container">
  <div class="row mb-3">
    @for ($i = 0; $i < 16; $i++)
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ $products[$i]->first_image }}" alt="" class="w-100 p-img">

          <div class="overview d-flex justify-content-center">
            <a href="{{route('quicklook', $products[$i]->id)}}" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>

        </div>
        <p class="product-title mt-2"><a href="">{{$products[$i]->name}}</a></p>
        <p class="product-price">Rs {{$products[$i]->price}}</p>
      </div>
    @endfor
  </div>
</div>

{{-- Load More Button --}}
<div class="d-flex justify-content-center">
  <a href="{{route('shop')}}" class="btn btn-outline-primary mt-4 mb-5 loadmore"> Load More</a>
</div>

@endsection