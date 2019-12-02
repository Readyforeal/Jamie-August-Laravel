@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1 class="font-weight-light">Websites</h1>

    <div class="mt-5">
        <p class="lead">Websites</p>
        
        <div class="border rounded-0 mt-3 w-100">
            <a class="nav-link text-dark py-3" href="#"><i class="ion ion-md-checkmark mr-4" style="color: #20c788;"></i>jamieaugust.com</a>
        </div>

        <div class=" mt-3 w-100">
            <a class="btn btn-outline-dark" href="{{ url('/profile') }}">Start a new website<i class="ion ion-md-arrow-forward ml-2"></i></a>
        </div>
    </div>

</div>

@endsection
