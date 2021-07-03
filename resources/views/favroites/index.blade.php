@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h5 class="favroite-title">
            My Favroite Item
        </h5>
        @if (session('sucess'))
        <div class="alert alert-danger">
            {{session('sucess')}}
        </div>
        @endif
        
          
          @if($favroites->where('user_id', '=',auth()->user()->id)->count() == 0)
            <div class="alert alert-primary">
              Currently you have no items in Favroite.
            </div>
            
          
          @else
          <div class="row mt-4 mb-4">
            @foreach($favroites as $favroite)
              @if(auth()->user()->id == $favroite->user_id)
                  <div class="col-md-3">  
                    <div class="product-image">
                      <img src="{{$favroite->product->first_image}}" alt="" class="w-100 p-img">

                      <div class="fav">
                        <form action="{{route('favroites.destroy',$favroite->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="delete-btn">
                            <a href="" class="overlook-fav"><i class="fas fa-heart"></i></a>
                          </button>
                        </form>

                      </div>
                
                      <div class="overview d-flex justify-content-center">
                        <a href="{{route('quicklook', $favroite->product_id)}}" class="btn btn-outline-primary btn-overview">Quick Look</a>
                      </div>
                
                    </div>
                      <p class="product-title mt-2"><a href="">{{$favroite->product->name}}</a></p>
                      <p class="product-price">Rs {{$favroite->product->price}}</p>
                  </div>
              @endif
            @endforeach
          </div>
          @endif
    </div>
@endsection