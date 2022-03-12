@extends('layouts.main')

@section('container')
    <!-- Your Page Content Goes Here-->
    <div class="page-content header-clear-medium">

		<div class="card card-style">
			<div class="content mb-0">
				<h6 class="font-700 mb-n1 color-highlight">Account Settings</h6>
				<h1 class="pb-2">Basic Information</h1>

                <br>
                <br>
                <br>

                <img src="images/empty.png" data-src="
                @if (Auth::user()->profile_photo_path)
                    {{ asset('storage/'.Auth::user()->profile_photo_path) }}
                @else
                    {{ Auth::user()->profile_photo_url }}
                @endif"
                width="150" height="150" class="mt-n5 preload-img mx-auto rounded-circle shadow-xl">
                <form  method="POST" action="user/{{ Auth::user()->id }}" enctype="multipart/form-data">
                    @method("put")
                    @csrf
				<div class="file-data">
					<div>
						<input type="file" class="upload-file" name="profile_photo_path" value="
                    @if (Auth::user()->profile_photo_path)
                        {{ asset('storage/'.Auth::user()->profile_photo_path) }}
                    @else
                        {{ Auth::user()->profile_photo_url }}
                    @endif" accept="image/*">
						<p class="btn btn-full btn-m text-uppercase font-700 font-11 rounded-s upload-file-text shadow-0 color-black">Tap here to Change Profile Photo</p>
					</div>
				</div>

				<div class="divider"></div>

				<div class="form-custom form-label form-icon mb-3">
					<i class="bi bi-person-circle font-14"></i>
					<input type="name" class="form-control rounded-xs" id="c1" name="name" value="{{ old('name', Auth::user()->name) }}"/>
					<label for="c1" class="color-theme form-label-always-active font-10 opacity-50">Name</label>
					<span>(required)</span>
				</div>
				<div class="form-custom form-label form-icon mb-3">
					<i class="bi bi-at font-16"></i>
					<input type="email" class="form-control rounded-xs" name="email" id="c1" value="{{ old('name', Auth::user()->email) }}"/>
					<label for="c1" class="color-theme form-label-always-active font-10 opacity-50">Email</label>
					<span>(required)</span>
				</div>
                <div class="content px-2 text-center">
				    <button class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Simpan</button>
			    </div>
                </form>
			</div>
		</div>

		<div class="card card-style">
			<div class="content mb-0">
				<h6 class="font-700 mb-n1 color-highlight">Account Settings</h6>
				<h1 class="pb-2">Basic Information</h1>
                <form  method="POST" action="penyedia_layanan" enctype="multipart/form-data">
                    @method("put")
                    @csrf
				<div class="form-custom form-label form-icon mb-3">
					<i class="bi bi-person-circle font-14"></i>
					<input type="text" class="form-control rounded-xs" id="c1" name="name" value="{{ old('name', Auth::user()->name) }}"/>
					<label for="c1" class="color-theme form-label-always-active font-10 opacity-50">Name</label>
					<span>(required)</span>
				</div>
				<div class="form-custom form-label form-icon mb-3">
					<i class="bi bi-at font-16"></i>
					<input type="email" class="form-control rounded-xs" id="c1" value="{{ old('name', Auth::user()->email) }}"/>
					<label for="c1" class="color-theme form-label-always-active font-10 opacity-50">Email</label>
					<span>(required)</span>
				</div>
                <div class="content px-2 text-center">
				    <a type="submit" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Simpan</a>
			    </div>
                </form>
			</div>
		</div>

		<div class="card card-style">
			<div class="content mb-0">
				<h6 class="font-700 mb-n1 color-highlight">Account Settings</h6>
				<h1 class="pb-2">Basic Information</h1>
                <form  method="POST" action="user" enctype="multipart/form-data">
				<div class="form-custom form-label form-icon mb-3">
					<i class="bi bi-person-circle font-14"></i>
					<input type="text" class="form-control rounded-xs" id="c1" name="name" value="{{ old('name', Auth::user()->name) }}"/>
					<label for="c1" class="color-theme form-label-always-active font-10 opacity-50">Name</label>
					<span>(required)</span>
				</div>
				<div class="form-custom form-label form-icon mb-3">
					<i class="bi bi-at font-16"></i>
					<input type="email" class="form-control rounded-xs" id="c1" value="{{ old('name', Auth::user()->email) }}"/>
					<label for="c1" class="color-theme form-label-always-active font-10 opacity-50">Email</label>
					<span>(required)</span>
				</div>
                <div class="content px-2 text-center">
				    <a type="submit" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Simpan</a>
			    </div>
                </form>
			</div>
		</div>

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

    </div>
	<!-- End of Page Content-->
@endsection

