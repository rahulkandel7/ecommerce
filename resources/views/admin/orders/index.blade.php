@extends('layouts.admin.app')

@section('meta')
    <meta http-equiv="refresh" content="10;url={{route('admin.orders.index')}}" />  
@endsection

@section('title')
    Orders
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Total Order Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" >
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="{{route('totalOrder')}}">Total Orders </a></div>
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
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Today Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalTodayOrder}}</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Today Revenue</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @php
                                    $totalRevenue = 0;
                                @endphp

                                @for ($i = 0; $i < $todayOrders->count(); $i++)
                                    @if($todayOrders[$i]->status == 'delivered')
                                        @php
                                            $totalRevenue = $totalRevenue + $todayOrders[$i]->totalprice;
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
    
    <!-- Today Orders -->
    <div class="card shadow mb-4 border-bottom-primary">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary d-inline">
                Today Orders
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
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            @foreach ($todayOrders as $todayOrder)
                                <tr>
                                    <td>{{ $todayOrder->id }}</td>
                                    <td>{{ $todayOrder->user->name }}</td>
                                    <td>{{ $todayOrder->product->name }}</td>
                                    <td>{{ $todayOrder->size }}</td>
                                    <td>{{ $todayOrder->color }}</td>
                                    <td>{{ $todayOrder->quantity }}</td>
                                    <td>{{ $todayOrder->totalprice }}</td>
                                    <td>{{ $todayOrder->city }}, {{$todayOrder->tol}}</td>
                                    <td>{{ $todayOrder->phone }}</td>
                                    <td>
                                        <div class="card p-2 shadow" style='@if($todayOrder->status == 'pending') color:white; background:#f6c23e; @elseif($todayOrder->status == 'cancled') color:white; background:#e74a3b;  @elseif($todayOrder->status == 'processing') color:white; background:#36b9cc; @else color:white; background:#1cc88a; @endif'>
                                            {{ $todayOrder->status }}
                                        </div>
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.orders.edit',$todayOrder) }}" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i></a>
                                        {{-- <form action="{{ route('admin.categories.destroy',$category) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <!-- Total Orders -->
    <div class="card shadow mb-4 border-bottom-primary">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary d-inline">
                Total Orders
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

                                    <td>
                                        
                                        <form action="{{ route('admin.orders.destroy',$totalOrder) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-outline-danger">
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
    </div> --}}

</div>
@endsection