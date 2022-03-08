{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nama') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Kata Sandi') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah punya akun ?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Daftar') }}
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
    <title>AN3 - Daftar</title>
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
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
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
            <div class="register-page pt-4">
                <a class="btn back-page-btn" href="/"><i class="ri-arrow-left-s-line"></i></a>
                <h3>Anda Belum Punya Akun.?</h3>
                <br>
                <p>Ayo Daftar Sekarang</p>
                <x-jet-validation-errors class="mb-4" />
                <form class="default-form-wrap" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-input-wrap">
                                <label><img src="assets/img/icon/svg/profile.svg" alt="img"></label>
                                <input type="text" class="form-control" placeholder="{{ __('Nama') }}" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-input-wrap">
                                <label><img src="assets/img/icon/svg/message.svg" alt="img"></label>
                                <input type="text" class="form-control" placeholder="{{ __('Email') }}" name="email" :value="old('email')" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-input-wrap">
                                <label><img src="assets/img/icon/svg/password.svg" alt="img"></label>
                                <input  class="form-control" placeholder="{{ __('Kata Sandi') }}" type="password" name="password" id="myInput" required autocomplete="new-password">
                            </div>
                            
                            <input type="checkbox" onclick="myFunction()">  <a>lihat Kata Sandi</a> 
                           
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="single-input-wrap">
                                <label><img src="assets/img/icon/svg/password.svg" alt="img"></label>
                                <input class="form-control" placeholder="{{ __('Konfirmasi Kata Sandi') }}" type="password" name="password_confirmation" id="myInput" required autocomplete="new-password">
                                <button class="show-pass-btn"></button>
                            </div>
                          <a class="hidden">Jika kamu menyetujui persyaratan dan ketentuan</a>
                          <br>
                          <br>
                            <input id="terms" type="checkbox" onclick="agree()" name="terms" value="on" /> saya setuju
                            

                    </div>
                    
                    <button class="btn btn-base w-100">Daftar Sekarang</button>
                </form>
                <span class="another-way-link">Sudah punya akun ? <a href="{{ route('login') }}">Masuk</a></span>
            </div>
        </div>
    </div>

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
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
    <script>
 function agree() {
		if ($('#terms').prop('checked'))
     //if ($('#terms').attr('checked'))	
		{
      $('.hidden').hide();
      //window.open('https://www.google.com', '_blank');
		}
			else 
			{
        $('.hidden').show();
			//return false;
			}
	}
</script>
</body>
</html>
