@extends('layouts.admin.app')

@section('title')
    {{$category->name}}
@endsection

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card shadow mb-4 border-left-secondary">
                    <div class="card-header">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary float-right"> Go Back </a>
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