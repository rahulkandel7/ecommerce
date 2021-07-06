@extends('layouts.admin.app')

@section('title')
    Products
@endsection

@section('content')
<div class="container-fluid">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Products</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('sucess'))
            <div class="alert alert-primary">
                {{session('sucess')}}
            </div>
        @endif  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary d-inline">
                All Products
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm float-right"> Create </a>
            </h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Sizes</th>
                            <th>Product Colors</th>
                            <th>Product Avaibility</th>
                            <th>Product Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                {{$product->sizes}}
                            </td>
                            <td>
                                {{$product->colors}}
                            </td>
                            <td>{{ $product->isStock ? 'Yes' : 'No' }}</td>
                            <td>{{ $product->category->name}}</td>
                            <td>
                                <a href="{{ route('admin.products.show',$product) }}" class="btn btn-outline-primary">Show</a>
                                <a href="{{ route('admin.products.edit',$product) }}" class="btn btn-outline-secondary">Edit</a>
                                <form action="{{ route('admin.products.destroy',$product) }}" method="post" class="d-inline">
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
                {{ $products->links() }}
              </div>
        </div>
    </div>

</div>
@endsection