@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 pb-5 h-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h1 class="display-5 text-dark font-weight-bold text-center">Register</h1>
            <p class="lead text-center">Let's get to know each other!</p>

            <form class="pt-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <input id="name" placeholder="Name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <input id="email" placeholder="Email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <input id="password" placeholder="Password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 m-auto">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group mt-5 mb-0">
                    <div class="col-md-6 m-auto">
                        <button type="submit" class="btn btn-lg btn-outline-primary w-100 rounded-0">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection