@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="card">
                    <div class="card-header">
                        All Categories
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($categories as $category)
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.show') }}" class="btn btn-outline-primary">Show</a>
                                    <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-secondary">Edit</a>
                                    <form action="{{ route('admin.categories.destroy') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-outline-delete">
                                    </form>
                                </td>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection