@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-light text-md-left text-center mt-5 mb-5">
    <div class="container">

        <h1 class="display-4"><span class="font-weight-bold">Services</h1>

    </div>
</div>

<div class="w-100 bg-light mt-5 pt-5">
    <div class="container">

        <h1 class="font-weight-bold">Web Design & Development</h1>

        <div class="row mt-5">
            <div class="col-md-6 lead font-weight-bold" style="background: rgb(244,241,239); background: linear-gradient(90deg, rgba(244,241,239,1) 0%, rgba(233,243,246,1) 100%);">
                <div class="p-5">

                    <div class="row">
                        <div class="col-6">
                            <p>Website / Landing Page</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$500</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Additional Pages</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$50 / each</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Custom Logo</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$50</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Hosting</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>See Below</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 bg-white p-0">
                <div class="p-5">
                    <img src="/svg/design.svg" height="50" class="mb-5">
                    <p class="lead">From pen and paper, to final product, I will work closely with you to create the perfect website for you or your business. Using the latest web technologies, your certain to stay ahead of the curve in this ever-changing online world.</p>
                </div>
                <a class="btn btn-lg btn-light rounded-0 w-100 p-4" href="#">Get started</a>
            </div>
        </div>
    </div>
</div>

<div class="w-100 bg-light mt-5 pt-5">
    <div class="container">

        <h1 class="font-weight-bold">Hosting</h1>

        <div class="row mt-5">
            <div class="col-md-6 lead font-weight-bold" style="background: rgb(241,223,249); background: linear-gradient(90deg, rgba(223,225,255,1) 0%, rgba(241,223,249,1) 100%);">
                <div class="p-5">

                    <div class="row">
                        <div class="col">
                            <p>Pricing varies depending on server size in GB, starting at $20 / month<br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Server Space<br>
                            <span class="font-weight-light">Varies with size</span></p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$20 / month</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Backups</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$5 / month</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Maintanance</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>Included</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>SSL Certificate</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>Included</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 bg-white p-0">
                <div class="p-5">
                    <img src="/svg/deploy.svg" height="50" class="mb-5">
                    <p class="lead">Reliability, security, and scalability are my top priorities. That's why I choose to host through DigitalOcean. You can rest easy knowing that your shiny new website is safe, secure, and up-to-date with a 99.999% uptime guarantee.</p>
                    <a href="https://digitalocean.com" target="_blank"><img class="mt-5 mb-5" src="/svg/DO_Logo_horizontal_black.svg" height="40"></a>
                </div>
                <a class="btn btn-lg btn-light rounded-0 w-100 p-4" href="#">Get started</a>
            </div>
        </div>
    </div>
</div>

<div class="w-100 bg-light mt-5 pt-5">
    <div class="container">

        <h1 class="font-weight-bold">SEO</h1>

        <div class="row mt-5">
            <div class="col-md-6 lead font-weight-bold" style="background: rgb(209,224,252); background: linear-gradient(90deg, rgba(209,224,252,1) 0%, rgba(223,225,255,1) 100%);">
                <div class="p-5">

                    <div class="row">
                        <div class="col-6">
                            <p>SEO<br>
                        </div>

                        <div class="col-6 text-right">
                            <p>$15 / month</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Insights</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>Included</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Copyrighting</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>Included</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 bg-white p-0">
                <div class="p-5">
                    <img src="/svg/be-discovered.svg" height="50" class="mb-5">
                    <p class="lead">Simply launching a website just isn't enough. Show up in searches and generate leads with monthly SEO Service Checks.</p>
                </div>
                <a class="btn btn-lg btn-light rounded-0 w-100 p-4" href="#">Get started</a>
            </div>
        </div>
    </div>
</div>

@endsection