<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="robots" content="all,follow">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Electro Shop') }}</title>

        <!--  Favicon icon -->
        <link rel="icon" href="{{ asset('assets/img/app-logo.png') }}" type="image/x-icon">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

        <!-- Lightbox-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/lightbox2/css/lightbox.min.css') }}">

        <!-- Range slider-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">

        <!-- Bootstrap select-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">

        <!-- Owl Carousel-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel2/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel2/assets/owl.theme.default.css') }}">

        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}" id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="antialiased">
        <div class="page-holder">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- HERO SECTION-->
            <div class="container">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layouts.footer')
        </div>

        <!-- JavaScript files-->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/lightbox2/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/owl.carousel2/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
        <script src="{{ asset('assets/js/front.js') }}"></script>

        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite -
            //   see more here
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {

                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = 'd-none';
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            // this is set to BootstrapTemple website as you cannot
            // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
            // while using file:// protocol
            // pls don't forget to change to your domain :)
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

        </script>

        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
              crossorigin="anonymous">
    </body>
</html>
