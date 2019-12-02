<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.user-header')
    </header>

    <main>
        <div class="container pt-5">
            <div class="row">

                <div class="col-md-3">
                    @include('includes.sidebar')
                </div>

                <div class="col">
                    @yield('content')
                </div>

            </div>
        </div>
    </main>

    <footer>
        
    </footer>
</body>

<script type="text/javascript">

    (function ($) {
        $(document).ready(function(){
            $("#scrolledNavbar").hide();

            $(function(){
                $(window).scroll(function(){
                    if($(this).scrollTop() > 100){
                        
                        $("#scrolledNavbar").slideDown(80);
                    }
                    else
                    {
                        $("#scrolledNavbar").slideUp(80);
                    }
                });
            });
        });
    }(jQuery));

</script>

</html>
