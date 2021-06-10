@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="d-flex">
                        <div class="mt-4 mb-4">
                            <div class="d-flex flex-column thumbnails">
                                <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"> </div>
                                <div id="f2" class="tb"> <img class="thumbnail-img fit-image" src="https://images.unsplash.com/photo-1490367532201-b9bc1dc483f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80"> </div>
                                <div id="f3" class="tb"> <img class="thumbnail-img fit-image" src="https://images.unsplash.com/photo-1491336477066-31156b5e4f35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80"> </div>
                                <div id="f4" class="tb"> <img class="thumbnail-img fit-image" src="https://images.unsplash.com/photo-1489370603040-dc6c28a1d37a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1778&q=80"> </div>
                            </div>
                            <fieldset id="f11" class="active">
                                <div class="product-pic"> <img class="pic0" src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"> </div>
                            </fieldset>
                            <fieldset id="f21" class="">
                                <div class="product-pic"> <img class="pic0" src="https://images.unsplash.com/photo-1490367532201-b9bc1dc483f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80"> </div>
                            </fieldset>
                            <fieldset id="f31" class="">
                                <div class="product-pic"> <img class="pic0" src="https://images.unsplash.com/photo-1491336477066-31156b5e4f35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80"> </div>
                            </fieldset>
                            <fieldset id="f41" class="">
                                <div class="product-pic"> <img class="pic0" src="https://images.unsplash.com/photo-1489370603040-dc6c28a1d37a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1778&q=80"> </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <h2 class="product-title">
                    Product Title
                </h2>
                <p class="overlook-price mt-3">
                    Rs 3000
                </p>

                <p class="overlook-des mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam deleniti vitae, placeat expedita nesciunt 
                    cupiditate? Quidem optio unde saepe cumque dolor. Esse temporibus nobis tempora aliquam culpa quibusdam, 
                    dolorum tempore.
                </p>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Size:
                        </p>
                    </div>
                    <div class="col-auto">
                        <div class="form-group">
                            <select class="form-control o-select">
                            <option selected disabled value="">Select Size</option>
                              <option >S</option>
                              <option>M</option>
                              <option>XL</option>
                            </select>
                          </div>
                    </div>
                    
                </div>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Color:
                        </p>
                    </div>
                    <div class="col-auto">
                            <div class="form-group">
                                <select class="form-control o-select">
                                <option selected disabled value="">Select Color</option>
                                  <option >Red</option>
                                  <option>Pink</option>
                                  <option>Green</option>
                                </select>
                            </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-start offset-2">
                    <div class="col-auto">
                        <p class="size">
                            Quantity:
                        </p>
                    </div>
                    <div class="col-auto q-box">
                        
                            <button class="quantity">+</button>
                            <span class="q-amt">1</span>
                            <button class="quantity">-</button>
                    </div>
                </div>

                <div class="row offset-2 mt-4">
                    <div class="col-auto">
                        <a href="" class="btn btn-outline-primary mt-2"> Add to Cart </a>

                    </div>
                    <div class="col-auto">
                        <a href="" class="overlook-fav"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
                    
            </div>
                
        </div>
    </div>
    
@endsection