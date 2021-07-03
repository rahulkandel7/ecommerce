@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create Product Color
                        <a href="{{ route('admin.productColors.create') }}" class="btn btn-danger btn-sm float-right"> Go Back </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.productColors.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="color">Product Color</label>
                                <input type="text" name="color" id="color" class="form-control @error('color')is-invalid @enderror">
                                @error('color')
                                    <div class="invalid-feedback">
                                    Enter Product color
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