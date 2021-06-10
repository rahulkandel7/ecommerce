@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h5 class="favroite-title">
            My Favroite Item
        </h5>
        <div class="row mt-4 mb-4">
            <div class="col-md-3">  
                <div class="product-image">
                  <img src="{{ asset('images/zebraone.jpg') }}" alt="" class="w-100 p-img">

                  <div class="fav">
                    <a href="" class="overlook-fav"><i class="fas fa-heart"></i></a>

                  </div>
          
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