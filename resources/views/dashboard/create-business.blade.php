<div id="form-business">
    <form>
    @csrf

        <div class="form-group">
            <div class="col-md-12 m-auto">

                <label for="bueinessName">Business name</label>
                <input id="bueinessName" name="bueinessName" type="text" class="form-control form-control-lg" required autofocus>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 m-auto">

                <label for="businessType">What does this business do?</label>
                <input id="businessType" name="businessType" type="text" class="form-control form-control-lg" required autofocus>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 m-auto">

                <label for="websiteType">What type of website do you need?</label>

                <div class="row mx-0">
                    <div class="col btn btn-light border text-left p-4 rounded-0">
                        <p class="font-weight-bold">Landing</p>
                        <p class="lead">Single page.</p>
                    </div>

                    <div class="col btn btn-light border text-left p-4 rounded-0">
                        <p class="font-weight-bold">Generic</p>
                        <p class="lead">More than one page.</p>
                    </div>

                    <div class="col btn btn-light border text-left p-4 rounded-0">
                        <p class="font-weight-bold">Generic + CMS</p>
                        <p class="lead">Add blog functionality.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group mt-5">
            <div class="col-md-12 m-auto">

                <label for="websiteType">What pages do you need?</label>

                

            </div>
        </div>

        <div class="mx-3 mt-5">
            <p>Pricing details</p>

            <div class="row">
                <div class="col">
                    <h3 class="font-weight-light">Hosting plan</h3>
                </div>
            </div>

            <div class="row mx-0 mt-3">
                <div class="col border border-primary text-primary p-4 text-center">
                    <h3 class="mt-3">Basic plan</h3>
                    <p class="lead">Starting at $15 / month</p>
                </div>
            </div>

            <div class="row mx-0 mt-3">
                <div class="col border border-primary text-primary p-4 text-center">
                    <h3 class="mt-3">CMS plan</h3>
                    <p class="lead">Starting at $20 / month</p>
                </div>
            </div>

            <div class="row mx-0 mt-3">
                <div class="col border border-primary text-primary p-4 text-center">
                    <h3 class="mt-3">Premium plan</h3>
                    <p class="lead">Starting at $50 / month</p>
                </div>
            </div>
        
        </div>

    </form>
</div>