@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row ">
            <div class="col-md-8 mt-4">
                <table class="table cart-table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                            <p>
                                <span class="mr-2">
                                    <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="" width="62" height="62">
                                </span>
                                Product Name
                                <span class="cart-delete ml-2">
                                   <a href=""> <i class="fas fa-trash"></i></a>
                                </span>
                            </p>
                        </th>
                        <td>Rs 3000</td>
                        <td>
                            <table>
                                <tr>
                                    <td class="cart-qty-tbl">
                                        <button class="quantity">+</button>
                                    </td>
                                    <td class="cart-qty-tbl" style="background-color: rgb(235, 230, 230);">
                                        <span class="q-amt">20</span>
                                    </td>
                                    <td class="cart-qty-tbl">
                                        <button class="quantity">-</button>
                                    </td>
                                </tr>
                            </table>
                            
                        </td>
                        <td>Rs 6000</td>
                      </tr>
                      
                      <tr>
                        <th scope="row">
                            <p>
                                <span class="mr-2">
                                    <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="" width="62" height="62">
                                </span>
                                Product Name
                                <span class="cart-delete ml-2">
                                   <a href=""> <i class="fas fa-trash"></i></a>
                                </span>
                            </p>
                        </th>
                        <td>Rs 3000</td>
                        <td>
                            <table>
                                <tr>
                                    <td class="cart-qty-tbl">
                                        <button class="quantity">+</button>
                                    </td>
                                    <td class="cart-qty-tbl" style="background-color: rgb(235, 230, 230);">
                                        <span class="q-amt">20</span>
                                    </td>
                                    <td class="cart-qty-tbl">
                                        <button class="quantity">-</button>
                                    </td>
                                </tr>
                            </table>
                            
                        </td>
                        <td>Rs 6000</td>
                      </tr>

                      <tr>
                        <th scope="row">
                            <p>
                                <span class="mr-2">
                                    <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="" width="62" height="62">
                                </span>
                                Product Name
                                <span class="cart-delete ml-2">
                                   <a href=""> <i class="fas fa-trash"></i></a>
                                </span>
                            </p>
                        </th>
                        <td>Rs 3000</td>
                        <td>
                            <table>
                                <tr>
                                    <td class="cart-qty-tbl">
                                        <button class="quantity">+</button>
                                    </td>
                                    <td class="cart-qty-tbl" style="background-color: rgb(235, 230, 230);">
                                        <span class="q-amt">20</span>
                                    </td>
                                    <td class="cart-qty-tbl">
                                        <button class="quantity">-</button>
                                    </td>
                                </tr>
                            </table>
                            
                        </td>
                        <td>Rs 6000</td>
                      </tr>

                      <tr>
                          <td colspan="4">
                              <p style="text-align: end" class="mr-4 mb-0">
                                <a href="" class="btn btn-outline-primary"> Update Cart </a>
                              </p>
                          </td>
                      </tr>

                    </tbody>
                  </table>
            </div>
            <div class="col-md-4 mt-4 mb-3 cart-total">
                <h3 class="mt-3 ml-4">Cart Total</h3>
                <h5 class="mt-4 ml-4">Subtotal: <span class="ml-4">Rs 6000</span></h5>
                <hr class="cart-line">
                <h5 class="mt-4 ml-4">Shipping: <span class="shipping-address ml-2">
                    Enter Shipping Details
                </span></h5>
                <input type="text" name="address" id="" placeholder="Enter Address" class="offset-2 mt-3">
                <input type="text" name="phone" id="" placeholder="Enter Phone Number" class="offset-2 mt-3">
                <p style="text-align: center" class="mr-4 mt-4 mb-0">
                    <a href="" class="btn btn-outline-primary"> Proceed To Checkout </a>
                  </p>
            </div>
        </div>
    </div>
@endsection