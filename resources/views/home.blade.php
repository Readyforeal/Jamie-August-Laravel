@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid bg-light text-dark text-md-left text-center">
    <div class="container pt-5 pb-5">

        <h1 class="display-4 font-weight-bold">My Account</h1>
        <p class="lead">Welcome, {{ Auth::user()->name }}</p>

    </div>
</div>

@endsection
