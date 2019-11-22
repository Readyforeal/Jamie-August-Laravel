@extends('layouts.default')

@section('content')
<div class="jumbotron jumbotron-fluid text-md-left text-center mt-5 mb-5" style="background-color: rgba(0,0,0,0);">
    
    <!--<div id="particles-js"></div>-->

    <style>
        #particles-js{
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>

    <div class="container pt-5 pb-5 mt-3 mb-3">

        <h1 class="display-4 font-weight-bold">Break through the template</h1>
        <p class="lead">I'm Jamie, a freelance, full-stack developer & designer based in Arizona.</p>

        <div class="d-flex pt-3 justify-content-md-start justify-content-center">
            <a class="btn btn-lg btn-primary rounded-0 p-3" href="{{ url('/register') }}" style="width: 220px;">Get started<i class="ion ion-md-arrow-forward ml-2"></i></a>
            @guest
            <a class="btn btn-lg btn-outline-primary rounded-0 p-3 ml-3" href="{{ url('/login') }}" style="width: 140px;">Login<i class="ion ion-md-arrow-forward ml-2"></i></a>
            @endguest
        </div>
    </div>
</div>

<div class="w-100 bg-light">

    <div class="container text-light" style="background-color: #101010;">
        <div class="row p-5">

            <div class="col-md-6">
                <p class="lead">I've had it with simplified website builders forcing you to fit their cookie-cutter designs when, let's be real, <span class="font-weight-bold">the design should ultimately fit you.</span></p>
                <a class="btn btn-lg btn-outline-light rounded-0" href="{{ url('/services') }}">See services<i class="ion ion-md-arrow-forward ml-2"></i></a>
            </div>

        </div>
    </div>

</div>

<div class="w-100 bg-light">

    <div class="container p-5 text-primary" style="background-color: rgba(67,83,255,.1);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Design</h1>
                <p class="lead">Break free from the template with designs far beyond what your current theme can do.</p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/design.svg" height="300">
            </div>
        </div>
    </div>

</div>

<div class="w-100 bg-light pt-5 text-primary">

    <div class="container p-5" style="background-color: rgba(67,83,255,.1);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Develop</h1>
                <p class="lead">Break free from the template with custom, minimally dependant, responsive code ready to face any device.</p>
                <p>For instance, this website was developed with PHP Laravel. A modern application framework with expressive and elegant syntax that grants a monstrous amount of creative freedom.</p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/develop.svg" height="300">
            </div>
        </div>
    </div>

</div>

<div class="w-100 bg-light pt-5 text-primary">

    <div class="container p-5" style="background-color: rgba(67,83,255,.1);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Deploy</h1>
                <p class="lead">Break free from the all-in-one hosting company you can never rely on when things go backwards.</p>
                <p>All of my products are hosted via Digital Ocean, the most reliable, scalable, and secure cloud structure one can hope for.</p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/deploy.svg" height="300">
            </div>
        </div>
    </div>

</div>

<div class="w-100 bg-light pt-5 text-primary">

    <div class="container p-5" style="background-color: rgba(67,83,255,.1);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Be Discovered</h1>
                <p class="lead">With monthly SEO service checks</p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/be-discovered.svg" height="300">
            </div>
        </div>
    </div>

</div>
@endsection