{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        @if (session('status'))
            <div class="mb-3 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-3">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>

            <div class="block mt-3">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa password anda ?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Masuk') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AN3 - Login</title>
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
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup area start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <div class="container">
        <div class="align-items-center d-flex justify-content-center">
            <div class="login-page pt-4 ">
               <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <center><img src="assets/img/logoan3.png" height="80px">
                                </center>
                                <center><h5 class="card-title fw-bold mb-1">Selamat datang di AN3</h3></center>
                                <br>
                                <br>
                <p>Silahkan Login Disini</p>
                <x-jet-validation-errors class="mb-1" />
                @if (session('status'))
                    <div class="mb-2 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="default-form-wrap" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-input-wrap">
                                <label><img src="assets/img/icon/svg/profile.svg" alt="img"></label>
                                <input type="email" class="form-control" placeholder="{{ __('Email') }}" name="email" :value="old('email')" required autofocus />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input-wrap">
                                <label><img src="assets/img/icon/svg/password.svg" alt="img"></label>
                                <input type="password" class="form-control" placeholder="{{ __('Kata Sandi') }}" name="password" id="myInput" required autocomplete="current-password">
                            </div>
                                <input type="checkbox" onclick="myFunction()"> <a>Lihat Kata Sandi</a>  
                                
                        </div>
                        
                        <div class="text-end"><a href="{{ route('password.request') }}">{{ __('Lupa password anda ?') }}</a></div>
                    
                    </div>
                    <button class="btn btn-base w-100"  >{{ __('Masuk') }}</button>
                </form>
                <span class="another-way-link">Belum punya akun ? <a href="{{ route('register') }}">Daftar</a></span>
            </div>
        </div>
    </div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
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
