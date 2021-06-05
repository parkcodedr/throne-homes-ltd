<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <meta name="keywords" content="{{ $siteinfos->meta_keywords }}" />
    <meta name="author" content="Administrator" />
    <meta name="description" content="{{ $siteinfos->meta_description }}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $siteinfos->welcomenote }}{{ $title }}</title>
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset($siteinfos->coy_apple_icon) }}" />
    <link rel="icon" href="{{ asset($siteinfos->coy_icon) }}">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/revolution/css/navigation.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <!-- ========== ICON FONTS ========== -->
    <link href="{{ asset('frontend/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/fonts/flaticon.css') }}" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
    @stack('css')
    @if(strtolower(join('',explode('/',Route::current()->getName())))=='index')
    <style type="text/css">
        #promo1 {
            background-image: url({{ asset($modaldiscount->app_modal_advert1) }});
            /* The image used */
            height: 350px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
            border-radius: 4px 0 0 4px;
        }

        #promo2 {
            background-image: url({{ asset($modaldiscount->app_modal_advert2) }});
            /* The image used */
            height: 350px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
            border-radius: 0 4px 4px 0;
        }

    </style>
    @endif
</head>

<body>
    <!-- start content -->
    @yield('content')
    <!-- end content -->


    <!-- ========== JAVASCRIPT ========== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.thumbs.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/countup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('frontend/js/instafeed.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/jquery.formatCurrency.js') }}"></script>
    <script src="{{ asset('frontend/toastr/toastr.js') }}"></script>
    <script>
        (function($) {
            $(window).on('load', function() {
                var delayMs = 1500; // delay in milliseconds

                setTimeout(function() {
                    $('#myModal').modal('show');
                }, delayMs);
            });
        })(jQuery);

    </script>
</body>

</html>
