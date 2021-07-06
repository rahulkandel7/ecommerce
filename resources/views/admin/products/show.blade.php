@extends('layouts.admin.app')

@section('title')
    {{$product->name}}
@endsection

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card shadow mb-4 border-left-secondary">
                    <div class="card-header">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary float-right"> Go Back </a>
                    </div>
                    <div class="card-body">
                        <h1>{{$product->name}}</h1>

                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <td>{{ $product->id }}</td>
                                
                            </tr>

                            <tr>
                                <th>SKU Number</th>
                                <td>{{ $product->sku}}</td>
                                
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <td>{{ $product->gender}}</td>
                                
                            </tr>
                            
                            <tr>
                                <th>Product Avaibility</th>
                                <td>{{ $product->isStock ? 'Yes' : 'No' }}</td>
                                
                            </tr>

                            <tr>
                                <th>Product Size</th>
                                <td>{{ $product->sizes}}</td>
                                
                            </tr>

                            <tr>
                                <th>Product Color</th>
                                <td>{{ $product->colors}}</td>
                                
                            </tr>

                            <tr>
                                <th>Product Category</th>
                                <td>{{ $product->category->name }}</td>
                                
                            </tr>

                            <tr>
                                <th>Product Description</th>
                                <td>{{ $product->p_desc}}</td>
                                
                            </tr>

                            <tr>
                                <th>Product First Image</th>
                                <td><img src="/storage/{{ $product->first_image}}" alt="first image" width="100" height="100"></td>
                                
                            </tr>

                            <tr>
                                <th>Product Second Image</th>
                                <td><img src="/storage/{{ $product->second_image}}" alt="second image" width="100" height="100"></td>
                                
                            </tr>

                            <tr>
                                <th>Product Third Image</th>
                                <td><img src="/storage/{{ $product->third_image}}" alt="third image" width="100" height="100"></td>
                                
                            </tr>

                            <tr>
                                <th>Created At</th>
                                <td>{{ $product->created_at }}</td>
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection