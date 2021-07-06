@extends('layouts.admin.app')

@section('title')
    categories
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
                            Total Categories</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
    <div class="card shadow mb-4 border-bottom-primary">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary d-inline">
                All Categories
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm float-right"> Create </a>
            </h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.categories.show',$category) }}" class="btn btn-outline-primary">Show</a>
                                        <a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-outline-secondary">Edit</a>
                                        <form action="{{ route('admin.categories.destroy',$category) }}" method="post" class="d-inline">
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
                {{ $categories->links() }}
              </div>
        </div>
    </div>

</div>
@endsection