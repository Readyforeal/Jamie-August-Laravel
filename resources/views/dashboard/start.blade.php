@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="font-weight-light text-center">Get started</h1>
    
    <section id="first">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 px-5">
                <h4>What will your website be used for?</h4>

                <div class="row pt-3">

                    <div class="col py-2">
                        <button class="btn btn-lg btn-outline-primary btn-block rounded-0 shadow-sm p-5 text-left" id="btn-myself">
                            <h1 class="">Myself</h1>
                            <p>This is a site for personal use, blogging, portfolio, etc.</p>
                        </button>
                    </div>

                    <div class="col py-2">
                        <button class="btn btn-lg btn-outline-primary btn-block rounded-0 shadow-sm p-5 text-left" id="btn-business">
                            <h1 class="">Business</h1>
                            <p>This is a site for my business or a business I work for.</p>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="form-section" class="d-none">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 px-5">

                <div id="form-myself">
                    <form>
                    @csrf

                        <div class="form-group m-auto py-3">
                            <label for="websiteName">Desired website name</label>
                            <input id="websiteName" name="websiteName" type="text" class="form-control form-control-lg" required autofocus>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="businessType">What is this website for?</label>
                            <input id="businessType" name="businessType" type="text" placeholder="Eg. Portfolio, Blog, Etc." class="form-control form-control-lg" required autofocus>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="websiteType">What type of website do you need?</label>
                            <input type="hidden" id="websiteType" name="websiteType" value="">

                            <div class="row mx-0 shadow-sm">
                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 wt" id="wt-landing">
                                    <p class="font-weight-bold">Landing</p>
                                    <p class="lead">Single page.</p>
                                </div>

                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 wt" id="wt-generic">
                                    <p class="font-weight-bold">Generic</p>
                                    <p class="lead">More than one page.</p>
                                </div>

                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 wt" id="wt-generic-cms">
                                    <p class="font-weight-bold">Generic + CMS</p>
                                    <p class="lead">Add blog functionality.</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="needSEO">Will you need SEO services?</label>
                            <input type="hidden" id="needSEO" name="needSEO" value="">

                            <div class="row mx-0 shadow-sm">
                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 seo" id="seo-yes">
                                    <p class="font-weight-bold">Yes</p>
                                    <p class="lead">Maintain SEO.</p>
                                </div>

                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 seo" id="seo-no">
                                    <p class="font-weight-bold">No</p>
                                    <p class="lead">SEO is not important to me.</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="contactMethod-business">How would you prefer to be contacted?</label>
                            <input type="hidden" id="contactMethod-business" name="contactMethod-business" value="">

                            <button type="button" class="btn btn-lg btn-primary text-left w-100 rounded-0 contact-business" id="contact-business-phone">
                            Phone
                            </button>

                            <button type="button" class="btn btn-lg btn-primary text-left w-100 rounded-0 contact-business" id="contact-business-email">
                            Email
                            </button>

                        </div>

                        <div class="form-group m-auto py-5">
                            <button class="btn btn-lg btn-outline-primary w-100 rounded-0">Submit</button>
                        </div>

                    </form>
                </div>

                <div id="form-business">
                    <form>
                    @csrf

                        <div class="form-group m-auto py-3">
                            <label for="businessName">Business name</label>
                            <input id="businessName" name="businessName" type="text" class="form-control form-control-lg" required autofocus>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="businessType">What does this business do?</label>
                            <input id="businessType" name="businessType" type="text" class="form-control form-control-lg" required autofocus>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="websiteType-business">What type of website do you need?</label>
                            <input type="hidden" id="websiteType-business" name="websiteType-business" value="">

                            <div class="row mx-0">
                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 wt-business" id="wt-business-landing">
                                    <p class="font-weight-bold">Landing</p>
                                    <p class="lead">Single page.</p>
                                </div>

                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 wt-business" id="wt-business-generic">
                                    <p class="font-weight-bold">Generic</p>
                                    <p class="lead">More than one page.</p>
                                </div>

                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 wt-business" id="wt-business-generic-cms">
                                    <p class="font-weight-bold">Generic + CMS</p>
                                    <p class="lead">Add blog functionality.</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="needSEO-business">Will you need SEO services?</label>
                            <input type="hidden" id="needSEO-business" name="needSEO-business" value="">

                            <div class="row mx-0">
                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 seo-business" id="seo-business-yes">
                                    <p class="font-weight-bold">Yes</p>
                                    <p class="lead">Maintain SEO.</p>
                                </div>

                                <div class="col btn btn-primary border border-light text-left p-4 rounded-0 seo-business" id="seo-business-no">
                                    <p class="font-weight-bold">No</p>
                                    <p class="lead">SEO is not important to me.</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-auto py-3">
                            <label for="contactMethod-business">How would you prefer to be contacted?</label>
                            <input type="hidden" id="contactMethod-business" name="contactMethod-business" value="">

                            <button type="button" class="btn btn-lg btn-primary btn-block rounded-0 contact-business" id="contact-business-phone">
                            Phone
                            </button>

                            <button type="button" class="btn btn-lg btn-primary btn-block rounded-0 contact-business" id="contact-business-email">
                            Email
                            </button>

                        </div>

                        <div class="form-group m-auto py-5">
                            <button class="btn btn-lg btn-outline-primary w-100 rounded-0">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

    (function ($) {
        $(document).ready(function(){

            $('#form-myself').hide();
            $('#form-business').hide();
            $('#form-section').removeClass('d-none');

            $('#btn-myself').on('click', function(){
                $('#first').fadeOut(200);
                $('#form-myself').delay(500).fadeIn(200);
            });

            $('#btn-business').on('click', function(){
                $('#first').fadeOut(200);
                $('#form-business').delay(500).fadeIn(200);
            });

            //
            // What type of website?
            //

            $('.wt').on('click', function(){
                $('.wt').removeClass('active');
                $(this).addClass('active');

                var value = $(this).attr('id')

                $('#websiteType').val(value);

                var hiddenInputValue = $('#websiteType').val();
            });

            $('.wt-business').on('click', function(){
                $('.wt-business').removeClass('active');
                $(this).addClass('active');

                var value = $(this).attr('id')

                $('#websiteType-business').val(value);

                var hiddenInputValue = $('#websiteType-business').val();
            });

            //
            // SEO services needed?
            //

            $('.seo').on('click', function(){
                $('.seo').removeClass('active');
                $(this).addClass('active');

                var value = $(this).attr('id')

                $('#needSEO').val(value);

                var hiddenInputValue = $('#needSEO').val();
            });

            $('.seo-business').on('click', function(){
                $('.seo-business').removeClass('active');
                $(this).addClass('active');

                var value = $(this).attr('id')

                $('#needSEO-business').val(value);

                var hiddenInputValue = $('#needSEO-business').val();
            });

            //
            // Contact method
            //

            $('.contact').on('click', function(){
                $('.contact').removeClass('active');
                $(this).addClass('active');

                var value = $(this).attr('id')

                $('#contactMethod').val(value);

                var hiddenInputValue = $('#contactMethod').val();
            });

            $('.contact-business').on('click', function(){
                $('.contact-business').removeClass('active');
                $(this).addClass('active');

                var value = $(this).attr('id')

                $('#contactMethod-business').val(value);

                var hiddenInputValue = $('#contactMethod-business').val();
            });

        });
    }(jQuery));

</script>

@endsection
