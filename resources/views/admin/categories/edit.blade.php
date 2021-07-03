@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Update Categories
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-danger btn-sm float-right"> Go Back </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categories.update',$category) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror" value="{{ $category->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                    Enter category name
                                  </div>
                                @enderror
                            </div>

                            <input type="submit" value="Save" class="btn btn-outline-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection