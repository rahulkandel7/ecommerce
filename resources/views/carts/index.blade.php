@extends('layouts.app')

@section('content')
    <div class="container mt-4">
      @if($carts->where('user_id', '=',auth()->user()->id)->count() == 0)
        <div class="alert alert-primary">
          Currently you have no items in cart.
        </div>
      @else
        <div class="row ">
            <div class="col-md-8">
                <table class="table cart-table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col" >Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                      <div class="row mt-4 mb-4">
                        @foreach ($carts as $cart)
                        
                          @if(auth()->user()->id == $cart->user_id)
                       
                          <tr>
                            <th scope="row">
                              <table>
                                <tr>
                                  <td style="border: none">
                                    <img src="{{$cart->product->first_image}}" alt="image" width="62" height="62">
                                  </td>
                                  <td style="border: none">
                                    {{$cart->product->name}}
                                  </td>
                                  <td style="border: none">
                                    <span class="cart-delete ml-2">
                                        <button type="submit" id="p_delete" style="background-color: transparent; border:none">
                                          <i class="fas fa-trash"></i>
                                        </button>

                                        <script>
                                          $(function(){
                                            $('#p_delete').click(function() {
                                                $.ajax({
                                                  url: '{{route('carts.destroy',$cart->id)}}',
                                                  type: 'DELETE',
                                                  data: { 
                                                    "_token": "{{ csrf_token() }}",
                                                  },
                                                  success: function(response) {
                                                    // location.reload();
                                                  },
                                                  error: function (response) {
                                                    window.location.reload()
                                                  }
                                                });
                                              });
                                          }); 
                                        </script>
                                   </span>
                                  </td>
                                </tr>
                              </table>
                            </th>
                            <td> {{$cart->product->price}}</td>
                            <td> {{$cart->size}}</td>
                            <td> {{$cart->color}}</td>
                            <td> {{$cart->quantity}}</td>

                            <td style="font-weight: bold;">Rs {{$cart->quantity * $cart->product->price}}</td>
                            <td>
                                <a href="{{route('carts.edit',$cart->id)}}" class="btn btn-outline-primary">Edit</a>
                            </td>
                          </tr>
                          @endif
                        @endforeach
                      </div>
                    </tbody>
                  </table>
            </div>
            <div class="col-md-4 mt-4 mb-3 cart-total">
                <h3 class="mt-3 ml-4">Cart Total</h3>
                <h5 class="mt-4 ml-4">
                    Subtotal: 
                      <span class="ml-4">Rs 
                        @php
                          $value = 0;    
                        @endphp
                        @for ($i = 0; $i < $carts->count(); $i++)
                          @if(auth()->user()->id == $carts[$i]->user_id)
                            @php
                              $value = $value + $carts[$i]->quantity * $carts[$i]->product->price;
                            @endphp
                          @endif
                        @endfor
                        {{$value}}

                      </span>
                </h5>
                <hr class="cart-line">
                <h5 class="mt-4 ml-4">Shipping: <span class="shipping-address ml-2">
                    Enter Shipping Details
                </span></h5>
                <input type="text" name="city" id="city" placeholder="Enter City" class="offset-2 mt-3">
                <input type="text" name="tol" id="tol" placeholder="Enter Tol name" class="offset-2 mt-3">
                <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="offset-2 mt-3">
                <p style="text-align: center" class="mr-4 mt-4 mb-4">
                    <a class="btn btn-outline-primary" id="checkout"> Proceed To Checkout </a>
                  </p>
                  @foreach ($carts as $cart)
                    @if(auth()->user()->id == $cart->user_id)
                      <script>
                        $(function(){
                          $('#checkout').click(function() {
                              $.ajax({
                                url: '{{route('orders.store')}}',
                                type: 'POST',
                                data: { 
                                  "_token": "{{ csrf_token() }}",
                                  'user_id': {{auth()->user()->id}},
                                  'city' : $('#city').val(),
                                  'tol': $('#tol').val(),
                                  'phone': $('#phone').val(),
                                  'product_id': {{$cart->product_id}},
                                  'size': '{{$cart->size}}',
                                  'color': '{{$cart->color}}',
                                  'quantity': {{$cart->quantity}},
                                  'totalprice': {{$cart->quantity * $cart->product->price}},
                                },
                                success: function(response){
                                  alert('Your order has been placed');
                                }
                              });
                              
                            });
                        }); 

                        $(function(){
                          $('#checkout').click(function() {
                              $.ajax({
                                url: '{{route('carts.destroy',$cart->id)}}',
                                type: 'DELETE',
                                data: { 
                                  "_token": "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                  // location.reload();
                                },
                                error: function (response) {
                                  window.location.reload()
                                }
                              });
                            });
                        }); 
                        
                      </script>
                    @endif
                  @endforeach
            </div>
        </div>
    </div>
    @endif

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


@endsection