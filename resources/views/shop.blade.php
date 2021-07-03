@extends('layouts.app')

@section('content')
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
                <li>
                  <form action="{{route('filter')}}" method="get">
                    <button type="submit" class="product-link" name="price" value="all">
                      All
                    </button>
                  </form>
                </li>
                <li>
                  <form action="{{route('filter')}}" method="get">
                    <button type="submit" class="product-link" name="price" value="0-2000">
                      0 - 2000
                    </button>
                   </form>
                </li>
                <li>
                  <form action="{{route('filter')}}" method="get">
                    <button type="submit" class="product-link" name="price" value="2000-4000">
                      2000 - 4000
                    </button>
                  </form>
                </li>
                <li>
                  <form action="{{route('filter')}}" method="get">
                    <button type="submit" class="product-link" name="price" value="4000+">
                      4000 +
                    </button>
                  </form>
                </li>
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
  @if ($products->count() == 0)
    <div class="alert alert-primary">
      <p class="mb-0">
        No Product available in these price range.
      </p>
    </div> 
  @endif
  <div class="row mb-3">
    @foreach ($products as $product)
        
      <div class="col-md-3">
        <div class="product-image">
          <img src="{{ $product->first_image }}" alt="" class="w-100 p-img">

          <div class="overview d-flex justify-content-center">
            <a href="{{route('quicklook', $product->id)}}" class="btn btn-outline-primary btn-overview">Quick Look</a>
          </div>

        </div>
        <p class="product-title mt-2"><a href="">{{$product->name}}</a></p>
        <p class="product-price">Rs {{$product->price}}</p>
      </div>
    @endforeach
    <div class="container d-flex justify-content-center mt-4">
      {{ $products->links() }}
    </div>

  </div>
</div>
@endsection