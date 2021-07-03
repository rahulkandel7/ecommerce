@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create Product Sizes
                        <a href="{{ route('admin.productSizes.create') }}" class="btn btn-danger btn-sm float-right"> Go Back </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.productSizes.update',$productSize) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="size">Product Size</label>
                                <input type="text" name="size" id="size" class="form-control @error('size')is-invalid @enderror" value="{{ $productSize->size }}">
                                @error('size')
                                    <div class="invalid-feedback">
                                    Enter Product size
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