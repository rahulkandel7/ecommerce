@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                @if(session('sucess'))
                    <div class="alert alert-primary">
                        {{session('sucess')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        All Products
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm float-right"> Create </a>
                    </div>
                    <div class="card-body">
                        <h5>Total Product: {{$total}}</h5>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Sizes</th>
                                <th>Product Colors</th>
                                <th>Product Avaibility</th>
                                <th>Product Category</th>
                                <th>Actions</th>
                            </tr>
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
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection