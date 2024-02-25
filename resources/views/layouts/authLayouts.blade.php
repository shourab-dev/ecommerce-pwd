<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Sign In</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/font-awesome.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/flaticon/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/slick-theme.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/jquery-ui.min.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/sal.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/vendor/base.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/assets/css/style.min.css") }}">

</head>


<body>

    <main>
        <div class="axil-signin-area">

            <!-- Start Header -->
            <div class="signin-header">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <a href="{{ url('/') }}" class="site-logo"><img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="col-sm-8">
                        <div class="singin-header-btn">
                            <p>Not a member?</p>
                            @if (request()->routeIs('login'))
                                
                            <a href="{{ route('register') }}" class="axil-btn btn-bg-secondary sign-up-btn">Sign Up Now</a>
                            @else 
                            <a href="{{ route('login') }}" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header -->

            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="axil-signin-banner bg_image bg_image--9">
                        <h3 class="title">We Offer the Best Products</h3>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-2">
                    <div class="axil-signin-form-wrap">
                        @yield('authLayout')
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>