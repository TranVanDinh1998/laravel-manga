{{-- @extends('user.layouts.index')
@section('title', 'Home')
@section('content')
@endsection --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ url('admin2/files/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <!-- hover-effect.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/pages/hover-effect/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/pages/hover-effect/set2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/icon/icofont/css/icofont.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/icon/feather/css/feather.css') }}">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/pages/prism/prism.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/css/pcoded-horizontal.min.css') }}">
    <!-- star theme css -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/bars-1to10.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/bars-horizontal.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/bars-movie.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/bars-pill.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/bars-reversed.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/bars-square.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/jquery-bar-rating/css/css-stars.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/slick-carousel/css/slick.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/slick-carousel/css/slick-theme.css') }}">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ url('OwlCarousel2-develop/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('OwlCarousel2-develop/css/owl.theme.default.min.css') }}">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/pages/j-pro/css/demo.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/assets/pages/j-pro/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin2/files/assets/pages/j-pro/css/j-pro-modern.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- lightbox Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/lightbox2/css/lightbox.min.css') }}">
    <!-- light-box css -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/ekko-lightbox/css/ekko-lightbox.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/lightbox2/css/lightbox.css') }}">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{ url('admin2/files/bower_components/select2/css/select2.min.css') }}">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin2/files/bower_components/multiselect/css/multi-select.css') }}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!--Bootstrap 4-->

</head>
<!-- Menu horizontal fixed layout -->

<body>
    <!-- Pre-loader start -->
    {{-- <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-container">
            <!-- Menu header start -->
            @include('user.components.header')
            <!-- Menu header end -->
            <!--Main container start-->
            <div class="pcoded-main-container">
                @include('user.components.header_menu')
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            @yield('content')
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
            </div>
            <!--Main container end-->
            <!--Menu footer start-->
            @include('user.components.footer')
            <!--Menu footer end-->
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/jquery/js/jquery.min.js') }}">
    </script>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/popper.js/js/popper.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/bootstrap/js/bootstrap.min.js') }}">
    </script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/modernizr/js/modernizr.js') }}">
    </script>
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/modernizr/js/css-scrollbars.js') }}">
    </script>
    <!-- Syntax highlighter prism js -->
    <script type="text/javascript" src="{{ url('admin2/files/assets/pages/prism/custom-prism.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/i18next/js/i18next.min.js') }}">
    </script>
    <!-- Select 2 js -->
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/select2/js/select2.full.min.js') }}">
    </script>
    <!-- Multiselect js -->
    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') }}">
    </script>
    <!-- light-box js -->
    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/ekko-lightbox/js/ekko-lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin2/files/bower_components/lightbox2/js/lightbox.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}">
    </script>

    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ url('admin2/files/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ url('admin2/files/assets/js/menu/menu-hori-fixed.js') }}"></script>
    <script src="{{ url('admin2/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin2/files/assets/js/script.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <!-- barrating js -->
    <script type="text/javascript"
        src="{{ url('admin2/files/bower_components/jquery-bar-rating/js/jquery.barrating.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ url('admin2/files/assets/pages/rating/rating.js') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>

    <!-- Owl Stylesheets -->
    <script src="{{ url('OwlCarousel2-develop/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#slider .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            })
        });

    </script>
</body>

</html>
