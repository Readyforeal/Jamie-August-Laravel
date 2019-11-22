@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="display-5 text-dark font-weight-bold text-center">Login</h1>
            <p class="lead text-center">Welcome back!</p>

            <form class="pt-4" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <input id="email" placeholder="Email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <input id="password" placeholder="Password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div class="col-md-6 m-auto">
                        <button type="submit" class="rounded-0 btn btn-lg btn-outline-primary w-100 mb-3">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="rounded-0 btn btn-link-danger btn-outline-primary w-100" href="{{ route('password.request') }}">
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
