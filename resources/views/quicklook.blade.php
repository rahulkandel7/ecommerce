@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('sucess'))
        <div class="alert alert-primary">
            {{session('sucess')}}
        </div>
        @endif

        @if (session('delete'))
        <div class="alert alert-danger">
            {{session('delete')}}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            You have already added to favroites.
        </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="d-flex">
                        <div class="mt-4 mb-4">
                            <div class="d-flex flex-column thumbnails">
                                <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="{{$product->first_image}}"> </div>
                                <div id="f2" class="tb"> <img class="thumbnail-img fit-image" src="{{$product->second_image}}"> </div>
                                <div id="f3" class="tb"> <img class="thumbnail-img fit-image" src="{{$product->third_image}}"> </div>
                                
                            </div>
                            <fieldset id="f11" class="active">
                                <div class="product-pic"> <img class="pic0" src="{{$product->first_image}}"> </div>
                            </fieldset>
                            <fieldset id="f21" class="">
                                <div class="product-pic"> <img class="pic0" src="{{$product->second_image}}"> </div>
                            </fieldset>
                            <fieldset id="f31" class="">
                                <div class="product-pic"> <img class="pic0" src="{{$product->third_image}}"> </div>
                            </fieldset>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <h2 class="product-title">
                    {{$product->name}}
                </h2>
                <p class="overlook-price mt-3">
                    Rs {{$product->price}}
                </p>

                <p class="overlook-des mt-4">
                    {!!$product->p_desc!!}
                </p>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Size:
                        </p>
                    </div>
                    <div class="col-auto">
                        <div class="form-group">
                            <select class="form-control o-select" id="size">
                            <option selected disabled value="">Select Size</option>
                            @foreach ($sizes as $size)
                              <option value={{$size}}>{{$size}}</option>
                            @endforeach
                            </select>
                          </div>
                    </div>
                    
                </div>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Color:
                        </p>
                    </div>
                    <div class="col-auto">
                            <div class="form-group">
                                <select class="form-control o-select" id="color">
                                <option selected disabled value="">Select Color</option>
                                @foreach ($colors as $color)
                                <option value={{$color}}>{{$color}}</option>
                              @endforeach
                                </select>
                            </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Quantity:
                        </p>
                    </div>
                    <div class="col-auto q-box">
                        
                            <button class="quantity" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                            <input type="text" class="q-amt" id="number" value="0" />

                            <button class="quantity" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                    </div>
                </div>

                <div class="row offset-2 mt-4">
                    <div class="col-auto">
                        <button type="submit" class="delete-btn" id="addtoCart">
                            <a href="" class="btn btn-outline-primary mt-2"> Add to Cart </a>
                        </button>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="delete-btn" id="addtoFav">
                            <a class="overlook-fav"><i class="fas fa-heart"></i></a>
                        </button>
                    </div>
                </div>
                    
            </div>
                
        </div>
    </div>

    <script>
        function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;

        value++;
        document.getElementById('number').value = value;
        }

        function decreaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById('number').value = value;
        }
    </script>

    <script>

        $(function(){
        $('#addtoFav').click(function() {
                $.ajax({
                    url: '{{route('favroites.store')}}',
                    type: 'POST',
                    data: { 
                        "_token": "{{ csrf_token() }}",
                        'user_id': {{auth()->user()->id}},
                        'product_id': {{$product->id}},
                        },
                    success: function(response)
                    {
                        alert('Added to Favroite Sucessfully');
                    },
                    
                });
            });
        });  

        $(function(){
        $('#addtoCart').click(function() {
                $.ajax({
                    url: '{{route('carts.store')}}',
                    type: 'POST',
                    data: { 
                        "_token": "{{ csrf_token() }}",
                        'user_id': {{auth()->user()->id}},
                        'product_id': {{$product->id}},
                        'quantity': $('#number').val(),
                        'size': $('#size').val(),
                        'color': $('#color').val(),
                        },
                    // success: function(response)
                    // {
                    //     alert('Added to Cart Sucessfully');
                    // },
                    // error: function(response){
                    //     alert(response);
                    // }
                });
                console.log($('#size').val());
            });
        });  
    </script>
    
@endsection