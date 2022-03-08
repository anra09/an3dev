<!--<x-guest-layout>-->
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
</html>
