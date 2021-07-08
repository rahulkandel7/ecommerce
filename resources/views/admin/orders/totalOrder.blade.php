@extends('layouts.admin.app')

@section('title')
    Orders
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Total Order Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Order Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Revenue</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @php
                                    $totalRevenue = 0;
                                @endphp

                                @for ($i = 0; $i < $totalOrders->count(); $i++)
                                    @if($totalOrders[$i]->status == 'delivered')
                                        @php
                                            $totalRevenue = $totalRevenue + $totalOrders[$i]->totalprice;
                                        @endphp
                                    @endif
                                @endfor
                                    

                                {{$totalRevenue}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- Total Orders -->
    <div class="card shadow mb-4 border-bottom-primary">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary d-inline" >
              Total Order
              <a href="{{ route('admin.orders.index') }}" class="btn btn-danger btn-sm float-right"> Go Back </a>
            </h6>
          </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <th>Order Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($totalOrders as $totalOrder)
                                <tr>
                                    <td>{{ $totalOrder->id }}</td>
                                    <td>{{ $totalOrder->user->name }}</td>
                                    <td>{{ $totalOrder->product->name }}</td>
                                    <td>{{ $totalOrder->size }}</td>
                                    <td>{{ $totalOrder->color }}</td>
                                    <td>{{ $totalOrder->quantity }}</td>
                                    <td>{{ $totalOrder->totalprice }}</td>
                                    <td>{{ $totalOrder->city }}, {{$totalOrder->tol}}</td>
                                    <td>{{ $totalOrder->phone }}</td>
                                    <td>
                                        <div class="card p-2 shadow" style='@if($totalOrder->status == 'pending') color:white; background:#f6c23e; @elseif($totalOrder->status == 'cancled') color:white; background:#e74a3b;  @elseif($totalOrder->status == 'processing') color:white; background:#36b9cc; @else color:white; background:#1cc88a; @endif'>
                                            {{ $totalOrder->status }}
                                        </div>
                                    </td>

                                    <td>{{ $totalOrder->created_at->format('d/m/Y') }}</td>

                                    <td>
                                        <form action="{{ route('admin.orders.destroy',$totalOrder) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="container d-flex justify-content-center mt-4">
                {{ $totalOrders->links() }}
              </div>
        </div>
    </div>

</div>
@endsection