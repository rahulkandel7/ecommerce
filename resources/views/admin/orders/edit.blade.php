@extends('layouts.admin.app')

@section('title')
    Update Order
@endsection

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card shadow mb-4 border-left-secondary">
                    <div class="card-header py-3 ">
                        <h6 class="m-0 font-weight-bold text-primary d-inline" >
                          Update Order
                          <a href="{{ route('admin.orders.index') }}" class="btn btn-danger btn-sm float-right"> Go Back </a>
                        </h6>
                      </div>
                    <div class="card-body">
                        <form action="{{ route('admin.orders.update',$order) }}" method="post">
                            @csrf
                            @method('put')
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Product Name</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>{{ $order->product->name }}</td>
                                                <td>{{ $order->size }}</td>
                                                <td>{{ $order->color }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td>{{ $order->totalprice }}</td>
                                                <td>{{ $order->city }}, {{$order->tol}}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>
                                                    <select class="form-control form-control-sm" name="status">
                                                        <option value="pending">Pending</option>
                                                        <option value="processing">Processing</option>
                                                        <option value="delivered">Delivered</option>
                                                        <option value="cancled">Cancled</option>
                                                    </select>
                                                </td>
        
                                            </tr>

                                    </tr>
                                    
                                </tbody>
                            </table>

                            <input type="submit" value="Save" class="btn btn-outline-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection