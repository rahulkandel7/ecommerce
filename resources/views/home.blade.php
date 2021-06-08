@extends('layouts.app')

@section('content')
{{-- Slide Show Content --}} 
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1623003641967-c43abbede243?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1502&q=80" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated animate__backInDown">Summer Sale</h5>
          <p class="animate__animated animate__heartBeat animate__delay-1s">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1599940676457-cae80eebdcd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated animate__backInDown">Second slide label</h5>
          <p class="animate__animated animate__heartBeat animate__delay-1s">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1599834017599-d540b5fa8cf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animate__animated animate__backInDown">Third slide label</h5>
          <p class="animate__animated animate__heartBeat animate__delay-1s">Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  {{-- Choose Section --}}
  <div class="container">
      <div class="row">
          <div class="banner col-md-6">
              Women Sales Banner
          </div>
          <div class="banner col-md-6">
            Male Sales Banner
          </div>
      </div>
  </div>
@endsection
