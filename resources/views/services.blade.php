@extends('layouts.default')

@section('content')
<div class="jumbotron jumbotron-fluid text-md-left text-center bg-light py-5 my-5">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4 font-weight-bold">Services</h1>
                <!--<p class="lead font-weight-bold">Not everyone has time to worry about what shade of blue their buttons are, or why they're missing a lock icon on the left side of their URL.</p>
                <p class="lead">I use <span class="text-primary">this</span> shade, and yes I have a lock. You'd be surprised how many websites I come across that aren't secure.</p>
                <a class="btn btn-lg btn-primary rounded-0 p-3 mt-2" href="{{ url('/register') }}" style="width: 220px;">Get started<i class="ion ion-md-arrow-forward ml-2"></i></a>-->
            </div>

            <!--<div class="col-md-6 p-0 text-center text-primary">
                <div class="card border-0 rounded-0" style="background-color: rgba(67,83,255,.1);">
                    <div class="card-body">
                        <p class="lead pt-3 font-weight-bold">Web Design</p>
                    </div>
                </div>

                <div class="card border-0 rounded-0" style="background-color: rgba(67,83,255,.075);">
                    <div class="card-body">
                        <p class="lead pt-3 font-weight-bold">Hosting</p>
                    </div>
                </div>

                <div class="card border-0 rounded-0" style="background-color: rgba(67,83,255,.05);">
                    <div class="card-body">
                        <p class="lead pt-3 font-weight-bold">SEO</p>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>

<div class="w-100 bg-light">

    <div class="container text-light" style="background-color: #101010;">
        <div class="row p-5">

            <div class="col-md-6">
                <p class="lead font-weight-bold">Not everyone has time to worry about what shade of blue their buttons are, or why they're missing a lock icon on the left side of their URL.</span></p>
                <p class="lead">I use <span class="text-primary font-weight-bold">this</span> shade with the exception of the button below, and yes I have a lock. You'd be surprised how many websites I come across that aren't secure.</p>
                <a class="btn btn-lg btn-outline-light rounded-0" href="{{ url('/register') }}">Get started<i class="ion ion-md-arrow-forward ml-2"></i></a>
            </div>

        </div>
    </div>

</div>

<div class="w-100 bg-light">
    <div class="container">

        <h1 class="display-4 text-primary text-md-left text-center mt-5">Web Design</h1>

        <div class="row mt-5">
            <div class="col-md-6 lead text-primary" style="background-color: rgba(67,83,255,.1);">
                <div class="p-5">

                    <div class="row">
                        <div class="col-6">
                            <p>Creation</p>
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
                            <p>+ $50</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>SVG Logo</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$50</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Hosting Plan</p>
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
                    <p class="lead">From the wireframe, to the final product, I will work closely with you to create the perfect website for you or your business.</p>
                </div>
                <a class="btn btn-lg btn-light text-primary rounded-0 w-100 p-5 text-md-left" href="{{ route('register') }}">Get started with a website<i class="ion ion-md-arrow-forward ml-4"></i></a>
                <!--<a class="btn btn-lg btn-light rounded-0 w-100 p-4" href="#">Get started</a>-->
            </div>
        </div>
    </div>
</div>

<div class="w-100 bg-light pt-5">
    <div class="container">

        <h1 class="display-4 text-primary text-md-left text-center mt-5">Hosting</h1>

        <div class="row mt-5">
            <div class="col-md-6 lead font-weight-bold text-primary" style="background-color: rgba(67,83,255,.1);">
                <div class="p-5">

                    <!--<div class="row">
                        <div class="col">
                            <p>Pricing varies depending on server size in GB, starting at $20 / month<br>
                        </div>
                    </div>-->

                    <div class="row">
                        <div class="col-6">
                            <p>Basic</p>
                            <p class="font-weight-light">Best for simple sites with no need for a CMS</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$15 / month</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>WordPress CMS</p>
                            <p class="font-weight-light">Best for simple blogs or other content-driven sites</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$20 / month</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Business</p>
                            <p class="font-weight-light">Best for large, high-traffic websites</p>
                        </div>

                        <div class="col-6 text-right">
                            <p>$50 / month</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 bg-white p-0">
                <div class="p-5">
                    <img src="/svg/deploy.svg" height="50" class="mb-5">
                    <p class="lead">Reliability, security, and scalability are my top priorities. That's why I choose to host through DigitalOcean. You can rest easy knowing that your website is safe, secure, and always up to date with a 99.999% uptime guarantee.</p>
                </div>
                <!--<a class="btn btn-lg btn-light rounded-0 w-100 p-4" href="#">Get started</a>-->
            </div>
        </div>

        <div class="row font-weight-bold lead" style="color: #20c788; background-color: rgba(32, 199, 136, 0.15);">

            <div class="col-md-6 py-5">
            
                <div class="row">
                    <div class="col-6 pt-2 text-right">
                        <p>Domain connection</p>
                        <p>SSL encryption</p>
                        <p>Auto backups</p>
                        <p>Form submission</p>
                        <p>Security & Upkeep</p>
                        <p>Scalability</p>
                    </div>

                    <div class="col-6 pt-2 text-center">
                        <p><i class="ion ion-md-checkmark"></i></p>
                        <p><i class="ion ion-md-checkmark"></i></p>
                        <p><i class="ion ion-md-checkmark"></i></p>
                        <p><i class="ion ion-md-checkmark"></i></p>
                        <p><i class="ion ion-md-checkmark"></i></p>
                        <p><i class="ion ion-md-checkmark"></i></p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 p-0">
                <a class="btn btn-lg btn-light rounded-0 w-100 p-5 text-md-left" style="color: #20c788;" href="{{ route('register') }}">Get started with the basic plan<i class="ion ion-md-arrow-forward ml-4"></i></a>
                <a class="btn btn-lg btn-light rounded-0 w-100 p-5 text-md-left" style="color: #20c788;" href="{{ route('register') }}">Get started with the CMS plan<i class="ion ion-md-arrow-forward ml-4"></i></a>
                <a class="btn btn-lg btn-light rounded-0 w-100 p-5 text-md-left" style="color: #20c788;" href="{{ route('register') }}">Get started with the business plan<i class="ion ion-md-arrow-forward ml-4"></i></a>
            </div>

        </div>
    </div>
</div>

<div class="w-100 bg-light pt-5">
    <div class="container">

        <h1 class="display-4 text-primary text-md-left text-center mt-5">SEO</h1>

        <div class="row mt-5">
            <div class="col-md-6 lead font-weight-bold text-primary" style="background-color: rgba(67,83,255,.1);">
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
                    <p class="lead">Simply launching a website just isn't enough. Show up in searches and generate leads with monthly SEO service checks.</p>
                </div>
                <!--<a class="btn btn-lg btn-light rounded-0 w-100 p-4" href="#">Get started</a>-->
            </div>
        </div>
    </div>
</div>

@endsection