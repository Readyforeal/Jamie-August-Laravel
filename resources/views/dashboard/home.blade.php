@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1 class="font-weight-light">Home</h1>

    <div class="mt-5">
        <p class="lead">Websites</p>
        
        <div class="border rounded-0 mt-3 w-100 d-flex">
            <a class="nav-link text-dark py-3" href="#"><i class="ion ion-md-checkmark mr-4" style="color: #20c788;"></i>jamieaugust.com</a>
            <a class="nav-link text-dark font-weight-bold py-3 ml-auto" href="#">Go to website<i class="ion ion-md-arrow-forward ml-2"></i></a>
        </div>

        <div class=" mt-3 w-100">
            <a class="btn btn-outline-dark w-100 p-3 rounded-0" href="{{ url('/start') }}">Start a new website<i class="ion ion-md-arrow-forward ml-2"></i></a>
        </div>
    </div>

    <div class="mt-5">
        <p class="lead">Hosting Plans</p>
        
        <div class="border rounded-0 mt-3 w-100">
            <a class="nav-link text-dark py-3" href="#">Business</a>
        </div>

    </div>

</div>

@endsection
