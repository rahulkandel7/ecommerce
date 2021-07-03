@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        All Categories
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm float-right"> Go Back </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <td>{{ $category->id }}</td>
                                
                            </tr>
                            
                            <tr>
                                <th>Name</th>
                                <td>{{ $category->name }}</td>
                                
                            </tr>

                            <tr>
                                <th>Created At</th>
                                <td>{{ $category->created_at }}</td>
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection