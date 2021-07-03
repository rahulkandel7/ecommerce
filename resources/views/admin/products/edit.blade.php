@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
          
            <div class="col-lg-12">
              @if($errors->any())
                <div class="alert alert-danger"> 
                  {{$errors->first()}}
                </div>
              @endif

                <div class="card">
                    <div class="card-header">
                        Update Product
                        <a href="{{ route('admin.products.index') }}" class="btn btn-danger btn-sm float-right"> Go Back </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.products.update', $product) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror" value="{{$product->name}}">
                                @error('name')
                                    <div class="invalid-feedback">
                                    Enter Product name
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="p_desc">Product Description</label>
                                <textarea name="p_desc" class="form-control" id="p_desc" cols="30" rows="10">{{$product->p_desc ?? old('p_desc')}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="sku">SKU Number</label>
                                <input type="text" name="sku" id="sku" class="form-control @error('sku')is-invalid @enderror" value="{{$product->sku}}">
                                @error('sku')
                                    <div class="invalid-feedback">
                                    Enter Product sku
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input type="text" name="price" id="price" class="form-control @error('price')is-invalid @enderror" value="{{$product->price}}">
                                @error('price')
                                    <div class="invalid-feedback">
                                    Enter Product price
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Is Stock:</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isStock" id="yes" value="1">
                                    <label class="form-check-label" for="yes">Yes</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isStock" id="no" value="0">
                                    <label class="form-check-label" for="no">No</label>
                                  </div>
                                  @error('isStock')
                                    <div class="invalid-feedback">
                                    Please select Yes or No
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Select Gender</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                  </div>
                                  @error('gender')
                                    <div class="invalid-feedback">
                                    Please select gender.
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="first_image">First Image</label>
                                <input type="file" name="first_image" id="first_image" class="form-control @error('first_image')is-invalid @enderror">
                                @error('first_image')
                                    <div class="invalid-feedback">
                                    Enter Product First Image
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="second_image">Second Image</label>
                                <input type="file" name="second_image" id="second_image" class="form-control @error('second_image')is-invalid @enderror">
                                @error('second_image')
                                    <div class="invalid-feedback">
                                    Enter Product Second Image
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="third_image">Third Image</label>
                                <input type="file" name="third_image" id="third_image" class="form-control @error('third_image')is-invalid @enderror">
                                @error('third_image')
                                    <div class="invalid-feedback">
                                    Enter Product Third Image
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control form-control-sm" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif class="form-control @error('category_id') is-invalid @enderror">{{ $category->name }}</option>
                                    @endforeach
                                  </select>
                                  @error('category_id')
                                    <div class="invalid-feedback">
                                    Select Product Category.
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label for="sizes" class="mr-2">Enter Product Available Sizes</label>
                              <input type="text" name="sizes" id="sizes" class="form-control @error('sizes')is-invalid @enderror" value="{{$product->sizes}}">
                                  

                                @error('sizes')
                                  <div class="invalid-feedback">
                                  Select Product Size.
                                </div>
                              @enderror
                          </div>

                          <div class="form-group">
                            <label for="colors" class="mr-2">Enter Product Available Colors</label>
                            <input type="text" name="colors" id="colors" class="form-control @error('colors')is-invalid @enderror" value="{{$product->colors}}">
                                

                              @error('colors')
                                <div class="invalid-feedback">
                                Select Product Color.
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

    <script src="{{asset('js/ckeditor/build/ckeditor.js')}}"></script>
    <script>
      ClassicEditor
			.create( document.querySelector( '#p_desc' ), {
				
				toolbar: {
					items: [
						'bold',
						'italic',
						'bulletedList',
						'numberedList',
						'|',
						'insertTable',
						'undo',
						'redo',
						'fontSize',
						'fontFamily',
						'fontColor'
					]
				},
				language: 'en',
				licenseKey: '',
				
				
				
			} )
			.then( editor => {
				window.editor = editor;
		
				
				
				
			} )
			.catch( error => {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: vq5cxtkfd9z1-mogr0i7lma3x' );
				console.error( error );
			} );
    </script>
@endsection