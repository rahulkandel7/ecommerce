@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <img src="https://www.fisu.net/medias/images/fisu_logo_2020_color_square.png?v=52" alt="logo" height="100">

    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <h2 class="login-heading d-flex justify-content-center">
                Create a Account
            </h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>


                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-border" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                        <input id="email" type="email" class="form-control form-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group">
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control form-border @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password" class="form-control form-border" name="password_confirmation" required autocomplete="new-password">

                </div>

                <div class="form-group">
                    <label for="phone_number" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+977</div>
                        </div>
                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror form-border" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                      </div>

                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group">
                    <label for="address" class="col-form-label text-md-right">{{ __('Address') }}</label>


                        <input id="address" type="text" class="form-control form-border @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group mb-4">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary form-btn-border">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
