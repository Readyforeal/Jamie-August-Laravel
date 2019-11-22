<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.guest-header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

<script type="text/javascript">

    (function ($) {
        $(document).ready(function(){
            $("#scrolledNavbar").removeClass("d-none");
            $("#scrolledNavbar").hide();

            $(function(){
                $(window).scroll(function(){
                    if($(this).scrollTop() > 0){
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
