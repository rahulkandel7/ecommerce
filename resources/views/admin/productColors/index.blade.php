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
                        All Product Colors
                        <a href="{{ route('admin.productColors.create') }}" class="btn btn-primary btn-sm float-right"> Create </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($productColors as $productColor)
                                <tr>
                                    <td>{{ $productColor->id }}</td>
                                    <td>{{ $productColor->color }}</td>
                                    <td>
                                        <a href="{{ route('admin.productColors.edit',$productColor) }}" class="btn btn-outline-secondary">Edit</a>
                                        <form action="{{ route('admin.productColors.destroy',$productColor) }}" method="post" class="d-inline">
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