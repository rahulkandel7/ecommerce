@extends('layouts.app')

@section('content')
    {{-- Product Overview Section --}}
<div class="container mt-3">
    <h2 class="product-overview">
      Shop Now
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
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Black Kurta</a></p>
        <p class="product-price">Rs 3000</p>
      </div>
  
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ asset('images/shirt.jpeg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Shirt</a></p>
        <p class="product-price">Rs 1000</p>
      </div>
  
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ asset('images/party.jpg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Party Dress</a></p>
        <p class="product-price">Rs 5000</p>
      </div>
  
      <div class="col-md-3">  
        <div class="product-image">
          <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
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
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Black Kurta</a></p>
        <p class="product-price">Rs 3000</p>
      </div>
  
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ asset('images/shirt.jpeg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Shirt</a></p>
        <p class="product-price">Rs 1000</p>
      </div>
  
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ asset('images/party.jpg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Party Dress</a></p>
        <p class="product-price">Rs 5000</p>
      </div>
  
      <div class="col-md-3">  
        <div class="product-image">
          <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
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
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Black Kurta</a></p>
        <p class="product-price">Rs 3000</p>
      </div>
  
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ asset('images/shirt.jpeg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">Shirt</a></p>
        <p class="product-price">Rs 1000</p>
      </div>
  
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ asset('images/party.jpg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
          
        </div>
        <p class="product-title mt-2">
          <a href="">Party Dress</a>
        </p>
        <p class="product-price">Rs 5000</p>
      </div>
  
      <div class="col-md-3">  
        <div class="product-image">
          <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">
  
          <div class="overview d-flex justify-content-center">
            <a href="" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>
  
        </div>
        <p class="product-title mt-2"><a href="">B/W onepiece</a></p>
        <p class="product-price">Rs 1000</p>
      </div>
    </div>
  </div>
@endsection