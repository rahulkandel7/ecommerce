@extends('layouts.admin.app')

@section('title')
    categories
@endsection

@section('content')
<div class="container-fluid">
    <!-- Total User Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
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
                All Users

                <div class="float-right d-inline">
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="{{route('admin.user.search')}}">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." value="{{request('q')}}"
                                aria-label="Search" aria-describedby="basic-addon2" name="q">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                
                </div>
            </h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        {{-- <a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-outline-secondary">Edit</a> --}}
                                        <form action="{{ route('admin.users.destroy',$user) }}" method="post" class="d-inline">
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
                {{ $users->links() }}
              </div>
        </div>
    </div>

</div>
@endsection