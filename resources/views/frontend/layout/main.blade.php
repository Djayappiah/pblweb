<!DOCTYPE html><html lang="zxx" class="theme-light"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/dark-style.css')}}">

    <title>Prudential Bank Limited</title>

    <link rel="icon" type="image/png" href="{{ asset('frontend/images/plogo.png') }}">

    <script>window.danteEmbed = "https://dante-ai.com/embed/?kb_id=5b88fbc6-93d5-420f-a988-2945fa33d067&token=0ce74887-82ab-4f5d-9231-7e916c6d9906&modeltype=gpt-4-omnimodel-mini&mode=false&logo=ZmFsc2U%3D&bubble=true&bubbleopen=false"</script><script src="https://dante-ai.com//bubble-embed.js"></script>
</head>

    <!-- Preloader -->
    <body><div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->

  @include('frontend.layout.navbar')
    
  @yield('content')

 
    
    <!-- Start Footer Area -->
  @include('frontend.layout.footer')
    <!-- End Footer Area -->
    
    <!--=== Start Go Top Button ===-->
    <div class="go-top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--=== End Go Top Button ===-->

    <!-- Dark/Light Toggle -->
    <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>

    <!-- Links of JS files -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/meanmenu.js')}}"></script>
    <script src="{{asset('frontend/js/nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/appear.min.js')}}"></script>
    <script src="{{asset('frontend/js/odometer.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body></html>