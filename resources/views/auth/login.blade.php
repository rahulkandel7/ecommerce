@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <img src="https://www.fisu.net/medias/images/fisu_logo_2020_color_square.png?v=52" alt="logo" height="100">

    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-auto">
            <h2 class="login-heading d-flex justify-content-center">
                Login
            </h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-border" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                
                <div class="form-group">
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-border" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row justify-content-start">
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary form-btn-border">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

                
    </div>
</div>
@endsection
