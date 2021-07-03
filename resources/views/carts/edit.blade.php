@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="d-flex">
                        <div class="mt-4 mb-4">
                            <div class="d-flex flex-column thumbnails">
                                <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="{{$cart->product->first_image}}"> </div>
                                <div id="f2" class="tb"> <img class="thumbnail-img fit-image" src="{{$cart->product->second_image}}"> </div>
                                <div id="f3" class="tb"> <img class="thumbnail-img fit-image" src="{{$cart->product->third_image}}"> </div>
                                
                            </div>
                            <fieldset id="f11" class="active">
                                <div class="product-pic"> <img class="pic0" src="{{$cart->product->first_image}}"> </div>
                            </fieldset>
                            <fieldset id="f21" class="">
                                <div class="product-pic"> <img class="pic0" src="{{$cart->product->second_image}}"> </div>
                            </fieldset>
                            <fieldset id="f31" class="">
                                <div class="product-pic"> <img class="pic0" src="{{$cart->product->third_image}}"> </div>
                            </fieldset>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <h2 class="product-title">
                    {{$cart->product->name}}
                </h2>
                <p class="overlook-price mt-3">
                   Price: Rs {{$cart->product->price}}
                </p>

               

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Size: {{$cart->size}}
                        </p>
                    </div>
                </div>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Color: {{$cart->color}}
                        </p>
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
                            <input type="text" class="q-amt" id="number" value="{{$cart->quantity}}" />

                            <button class="quantity" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                    </div>
                </div>

                <div class="row offset-2 mt-4">
                    <div class="col-auto">
                        <button type="submit" class="delete-btn" id="update">
                            <a class="btn btn-outline-primary mt-2"> Update </a>
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
            $('#update').click(function() {
                    $.ajax({
                        url: '{{route('carts.update',$cart->id)}}',
                        type: 'PUT',
                        data: { 
                            "_token": "{{ csrf_token() }}",
                            'user_id': {{auth()->user()->id}},
                            'product_id': {{$cart->product_id}},
                            'quantity': $('#number').val(),
                            'size': '{{$cart->size}}',
                            'color': '{{$cart->color}}',
                        },
                        success: function(response) {
                            alert('Product Updated Sucessfully');
                            window.location.href = "{{route('carts.index')}}";
                        },
                    });
                });
            }); 
    </script>
    
@endsection