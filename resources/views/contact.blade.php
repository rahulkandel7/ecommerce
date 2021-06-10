@extends('layouts.app')

@section('content')
    <div class="container-fluid contact mb-4">
        <h4 class="d-flex justify-content-center contact-heading">
            Contact Us
        </h4>
    </div>

    <div class="container">
        <div class="row mb-4 bor">
            <div class="col-md-6">
                <div class="container d-flex justify-content-center">
                    <div class="">
                        <h5 class="message mt-4">
                            Send Us Message
                            
                        </h5>
                        <form action="">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Email Address">
                            </div>
            
                            <div class="form-group">
                                <textarea class="form-control"  rows="3" placeholder="How can we help you?"></textarea>
                              </div>
                            <input type="submit" class="btn btn-outline-primary mb-4" value="Send Message "> 
    
                        </form>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
    
                <div class="container d-flex bor-left justify-content-center">
                    <div class="">
                        <p class="contact-info mt-4">
                            <i class="fas fa-map-marker-alt"></i>
                            Address
                        </p>
                        <p class="contact-des mt-1">
                            Narayanghat, Chitwan
                        </p>

                        <p class="contact-info mt-4">
                            <i class="fas fa-map-marker-alt"></i>
                            Let`s Talk
                        </p>
                        <p class="contact-des mt-1">
                            +9779812344567
                        </p>

                        <p class="contact-info mt-4">
                            <i class="fas fa-envelope"></i>
                            Sales Support
                        </p>
                        <p class="contact-des mt-1">
                            Example@ex.com
                        </p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
@endsection