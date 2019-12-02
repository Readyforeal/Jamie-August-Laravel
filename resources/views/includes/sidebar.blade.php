<div class="w-100 border-right">
    <p class="lead font-weight-bold pb-3 border-bottom">Dashboard</p>
    <a id="home" class="btn btn-light rounded-0 w-100 p-3 text-left" href="{{ url('/home') }}">Home</a>
    <a id="websites" class="btn btn-light rounded-0 w-100 p-3 text-left" href="{{ url('/websites') }}">Websites</a>

    <p class="lead font-weight-bold pt-5 pb-3 border-bottom">Account</p>
    <a id="profile" class="btn btn-light rounded-0 w-100 p-3 text-left" href="{{ url('/profile') }}">Profile</a>
    <a id="billing" class="btn btn-light rounded-0 w-100 p-3 text-left" href="{{ url('/billing') }}">Billing</a>
    <a id="security" class="btn btn-light rounded-0 w-100 p-3 text-left" href="{{ url('/security') }}">Security</a>
    <a id="help" class="btn btn-light rounded-0 w-100 p-3 text-left" href="{{ url('/help') }}">Help</a>
</div>

<script type="text/javascript">

    (function ($) {
        $(document).ready(function(){
            var pageName = location.href.split("/").slice(-1);
            var hash = '#';

            var result = hash.concat(pageName);

            $(result).addClass('active');
        });
    }(jQuery));

</script>