{{-- <!--<x-guest-layout>-->
<!--    <x-jet-authentication-card>-->
<!--        <x-slot name="logo">-->
<!--            <x-jet-authentication-card-logo />-->
<!--        </x-slot>-->

<!--        <div class="mb-4 text-sm text-gray-600">-->
<!--            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}-->
<!--        </div>-->

<!--        @if (session('status') == 'verification-link-sent')-->
<!--            <div class="mb-4 font-medium text-sm text-green-600">-->
<!--                {{ __('A new verification link has been sent to the email address you provided during registration.') }}-->
<!--            </div>-->
<!--        @endif-->

<!--        <div class="mt-4 flex items-center justify-between">-->
<!--            <form method="POST" action="{{ route('verification.send') }}">-->
<!--                @csrf-->

<!--                <div>-->
<!--                    <x-jet-button type="submit">-->
<!--                        {{ __('Resend Verification Email') }}-->
<!--                    </x-jet-button>-->
<!--                </div>-->
<!--            </form>-->

<!--            <form method="POST" action="{{ route('logout') }}">-->
<!--                @csrf-->

<!--                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">-->
<!--                    {{ __('Log Out') }}-->
<!--                </button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </x-jet-authentication-card>-->
<!--</x-guest-layout>-->



<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AN3 - Verifikasi Email</title>
    <!--fivicon icon-->
    <link rel="icon" href="assets/img/fevicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/slick-slide.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body class='sc5-2'>

    <div class="container">
        <div class="align-items-center d-flex justify-content-center vh-100">
            <div class="successful-msg-page  btn-bottom-fixed text-center">
                <img src="assets/img/icon/check.png" alt="img">
                <h3>Anda Berhasil Mendaftar</h3>
                <p>Silahkan Cek Email Untuk Memverifikasi</p>
                <div class="btn-fixed-wrap">
                                <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit" class="btn btn-base w-100">
                        {{ __('Kirim Ulang Email Verifikasi') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-base w-100">
                    {{ __('Keluar') }}
                </button>
            </form>
                    <a class="btn btn-base w-100" href="location-page.html"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>



    <!-- all plugins here -->
    <script src="assets/js/jquery.3.6.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imageloded.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/slick-slider.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
</html> --}}

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
        <title>Lupa Password</title>
        <link rel="apple-touch-icon" href="../../../app-assets/images/logoan3.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/logoan3.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-auth.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="auth-wrapper auth-v2">
                        <div class="auth-inner row m-0">
                            <!-- Brand logo--><a class="brand-logo" href="#">
                                <img src="/app-assets/images/logoan3.png" height="80px"></span>
                            </a>
                            <!-- /Brand logo-->
                            <!-- Left Text-->
                            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="../../../app-assets/images/pages/forgot-password-v2.svg" alt="Forgot password V2" /></div>
                            </div>
                            <!-- /Left Text-->
                            <!-- Forgot password-->
                            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                    <br>
                                    <br>
                                    @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <x-jet-validation-errors class="mb-4" />
                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" placeholder="Cari..." name="search">
                                        <span class="input-group-text" id="basic-addon1"><img src="assets/img/icon/search.svg"></span>
                                      </div>
                              </div>
                          </div>
                                    < <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                            <h2 class="card-title fw-bolder mb-1">Verifikasi email anda &#x2709;&#xFE0F;</h2>
                                            <p class="card-text mb-2">Verifikasi dikirim ke alamat email :<span class="fw-bolder"> {{ Auth::user()->email }}</span> segera cek kotak masuk email anda.</p>
                                            <form method="POST" action="{{ route('verification.send') }}">
                                                @csrf

                                                <div>
                                                    <button type="submit" class="btn btn-primary w-100">Kirim ulang email verifikasi</a>
                                                    </div>
                                                </form>

                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <button type="submit" class="btn btn-danger w-100 mt-2">
                                                        {{ __('Log Out') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- verify email-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <!-- /Forgot password-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Vendor JS-->
        <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="../../../app-assets/js/core/app-menu.js"></script>
        <script src="../../../app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="../../../app-assets/js/scripts/pages/page-auth-forgot-password.js"></script>
        <!-- END: Page JS-->

        <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
