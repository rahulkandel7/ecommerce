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
                        All Categories
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm float-right"> Create </a>
                    </div>
                    <div class="card-body">
                        <h5>Total Category: {{$total}}</h5>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
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
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection