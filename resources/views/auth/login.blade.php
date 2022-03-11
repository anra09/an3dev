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


<!DOCTYPE HTML>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"></head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Your Page Content Goes Here-->
    <div class="page-content mb-0 pb-0">

		<div class="card card-style mb-0 bg-transparent shadow-0 bg-3 mx-0 rounded-0" data-card-height="cover">
			<div class="card-center">
				<div class="card card-style">
					<div class="content">
						<h1 class="text-center font-800 font-30 mb-2">Sign In</h1>
						<p class="text-center font-13 mt-n2 mb-3">Enter your Credentials</p>

                        <x-jet-validation-errors class="mb-3" />

                        @if (session('status'))
                            <div class="mb-3 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
						<div class="form-custom form-label form-icon mb-3">
							<i class="bi bi-person-circle font-14"></i>
							<input type="text" class="form-control rounded-xs" id="c1" placeholder="Email" name="email" :value="old('email')" />
							<label for="c1" class="color-theme">Email</label>
						</div>
						<div class="form-custom form-label form-icon mb-3">
							<i class="bi bi-asterisk font-12"></i>
							<input type="password" class="form-control rounded-xs" id="c2" placeholder="Password" name="password"/>
							<label for="c2" class="color-theme">Password</label>
						</div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ingatkan password
                            </label>
                        </div>
						<button action="submit" class='btn rounded-sm btn-m gradient-green text-uppercase font-700 mt-4 mb-3 btn-full shadow-bg shadow-bg-s'>Sign In</button>
                        </form>
                        <div class="d-flex">
							<div>
								<a href="{{ route('password.request') }}" class="color-theme opacity-30 font-12">Lupa password</a>
							</div>
							<div class="ms-auto">
								<a href="{{ route('register') }}" class="color-theme opacity-30 font-12">Buat Akun</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div>
	<!-- End of Page Content-->

</div>
<!--End of Page ID-->

<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/custom.js"></script>
</body>
