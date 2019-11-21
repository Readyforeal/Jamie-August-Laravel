@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid text-md-left text-center mt-5 mb-5" style="background-color: rgba(0,0,0,0);">
    
    <div id="particles-js"></div>

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

        <h1 class="display-4 font-weight-bold">Back up your business</h1>
        <p class="lead font-weight-bold">With a website designed for the future.</p>
        <p class="lead">I'm Jamie, a freelance, full-stack developer & designer based in Arizona.</p>

        <div class="d-flex pt-3 justify-content-md-start justify-content-center">
            <a class="btn btn-lg btn-outline-primary rounded-0" href="#">My Services</a>
            <a class="btn btn-lg btn-outline-primary rounded-0 ml-3" href="#">Login</a>
        </div>
    </div>
</div>

<div class="w-100 bg-light">

    <div class="container p-5" style="background: rgb(209,224,252); background: linear-gradient(90deg, rgba(209,224,252,1) 0%, rgba(223,225,255,1) 100%);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Design</h1>
                <p class="lead">I'll admit it. I've had it with simplified website builders forcing you to fit their cookie-cutter designs when, let's be real, <span class="font-weight-bold">the design should ultimately fit you</span>.</p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/design.svg" height="300">
            </div>
        </div>
    </div>

</div>

<div class="w-100 bg-light pt-5">

    <div class="container p-5" style="background: rgb(241,223,249); background: linear-gradient(90deg, rgba(223,225,255,1) 0%, rgba(241,223,249,1) 100%);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Develop</h1>
                <p class="lead"></p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/develop.svg" height="300">
            </div>
        </div>
    </div>

</div>

<div class="w-100 bg-light pt-5">

    <div class="container bg-light p-5" style="background: rgb(241,223,249); background: linear-gradient(90deg, rgba(241,223,249,1) 0%, rgba(244,241,239,1) 100%);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Deploy</h1>
                <p class="lead">Did I mention I cover hosting as well?</p>
                <p>All of my products are hosted via Digital Ocean, the most reliable, scalable, and secure cloud structure one can dream of.</p>

                <div class="pt-4 pb-5">
                    <a href="https://digitalocean.com" target="_blank"><img src="/svg/DO_Logo_horizontal_black.svg" height="40"></a>
                </div>

            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/deploy.svg" height="300">
            </div>
        </div>
    </div>

</div>

<div class="w-100 bg-light pt-5">

    <div class="container bg-light p-5" style="background: rgb(244,241,239); background: linear-gradient(90deg, rgba(244,241,239,1) 0%, rgba(233,243,246,1) 100%);">
        <div class="row">
            <div class="col">
                <h1 class="display-4 font-weight-bold">Be Discovered</h1>
                <p class="lead">I'll admit it. I've had it with simplified website builders forcing you to fit their cookie-cutter designs when, let's be real, <span class="font-weight-bold">the design should ultimately fit you</span>.</p>
            </div>

            <div class="col">
                <img class="mx-auto d-block p-5" src="/svg/be-discovered.svg" height="300">
            </div>
        </div>
    </div>

</div>

@endsection