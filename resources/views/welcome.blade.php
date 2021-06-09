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
            <a href="" class="product-link">All Products</a>
          </li>
          <li class="mr-3"> 
            <a href="" class="product-link">Mens</a>
          </li>
          <li class="mr-3"> 
            <a href="" class="product-link">Womens</a>
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
            <div class="col-auto mb-3">
              <a href="" class="filter-btn mb-3">Jeans</a>
            </div>
            <div class="col-auto mb-3">
              <a href="" class="filter-btn mb-3">Shirt</a>

            </div>
            <div class="col-auto mb-3">
              <a href="" class="filter-btn mb-3">One-Piece</a>

            </div>
            <div class="col-auto mb-3">
              <a href="" class="filter-btn mb-3">Crop T-shirt</a>

            </div>
            <div class="col-auto mb-3">
              <a href="" class="filter-btn mb-3">Grunch Pant</a>

            </div>
            <div class="col-auto mb-3">
              <a href="" class="filter-btn mb-3">Grunch Pant</a>

            </div>
          </div>
           
        </div>
      </div>

    </div>
  </div>

  {{-- Search--}}
  <div class="collapse mb-3" id="searchExample">
    <div class="card card-body filter-card">
      <form action="" method="post">
        <label class="sr-only" for="search">Username</label>
        <div class="input-group mb-2 mr-sm-2">
          
          <input type="text" class="form-control" id="search" placeholder="Search Product">
          <div class="input-group-prepend">
            <div class="input-group-text form-search">
              <i class="fas fa-search ml-2"></i>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <button class="btn btn-outline-primary filter ml-4" type="submit" >
            Search <i class="fas fa-search ml-2"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>

{{--Product list --}}
<div class="container">
  <div class="row mb-3">

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/blackkurta.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Black Kurta</a></p>
      <p class="product-price">Rs 3000</p>
    </div>

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/shirt.jpeg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Shirt</a></p>
      <p class="product-price">Rs 1000</p>
    </div>

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/party.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Party Dress</a></p>
      <p class="product-price">Rs 5000</p>
    </div>

    <div class="col-md-3">  
      <div class="product-image">
        <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">B/W onepiece</a></p>
      <p class="product-price">Rs 1000</p>
    </div>
  </div>

  <div class="row mb-3">

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/blackkurta.jpg') }}" alt="" class="w-100 p-img">
        <div class="overview d-flex justify-content-center">
          <a href="" class="btn btn-outline-primary btn-overview">Overview</a>
        </div>
      </div>
      <p class="product-title mt-2"><a href="">Black Kurta</a></p>
      <p class="product-price">Rs 3000</p>
    </div>

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/shirt.jpeg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Shirt</a></p>
      <p class="product-price">Rs 1000</p>
    </div>

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/party.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Party Dress</a></p>
      <p class="product-price">Rs 5000</p>
    </div>

    <div class="col-md-3">  
      <div class="product-image">
        <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">B/W onepiece</a></p>
      <p class="product-price">Rs 1000</p>
    </div>
  </div>

  <div class="row mb-3">

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/blackkurta.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Black Kurta</a></p>
      <p class="product-price">Rs 3000</p>
    </div>

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/shirt.jpeg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">Shirt</a></p>
      <p class="product-price">Rs 1000</p>
    </div>

    <div class="col-md-3">
      <div class="product-image">
        <img src="{{ asset('images/party.jpg') }}" alt="" class="w-100 p-img">
        
      </div>
      <p class="product-title mt-2">
        <a href="">Party Dress</a>
        <i style="text-align: end">hi</i>
      </p>
      <p class="product-price">Rs 5000</p>
    </div>

    <div class="col-md-3">  
      <div class="product-image">
        <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">
      </div>
      <p class="product-title mt-2"><a href="">B/W onepiece</a></p>
      <p class="product-price">Rs 1000</p>
    </div>
  </div>
</div>

{{-- Load More Button --}}
<div class="d-flex justify-content-center">
  <a href="" class="btn btn-outline-primary mt-4 mb-5 loadmore"> Load More</a>
</div>

@endsection