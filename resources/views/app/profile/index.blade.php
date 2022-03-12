@extends('layouts.main')

@section('container')

<!-- Your Page Content Goes Here-->
    <div class="page-content header-clear-medium">

		<div class="card card-style mt-5 overflow-visible">
			<img src="images/empty.png" data-src="{{ Auth::user()->profile_photo_url }}" width="150" height="150" class="mt-n5 preload-img mx-auto rounded-circle shadow-xl">
			<div class="content text-center">
				<div class="px-3 mb-n3">
					<h1 class="font-700">{{ Auth::user()->name }}</h1>
					<p class="font-700">{{ Auth::user()->email }}</p>
				</div>
			</div>

			<div class="content">
				<div class="row mb-0">
					<div class="col-12">
						<a href="user" class="btn btn-full btn-s rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s">Edit Profile</a>
					</div>
				</div>
			</div>
		</div>

    </div>
	<!-- End of Page Content-->

@endsection
