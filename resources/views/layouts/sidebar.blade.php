<!-- Main Sidebar-->
<div id="menu-main" data-menu-active="nav-homes" style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">

<div class="bg-theme mx-3 rounded-m shadow-m mt-3 mb-3">
	<div class="d-flex px-2 pb-2 pt-2">
		<div>
			<a href="#"><img src="{{ Auth::user()->profile_photo_url }}" width="45" class="rounded-s" alt="img"></a>
		</div>
		<div class="ps-2 align-self-center">
			<h5 class="ps-1 mb-0 line-height-xs pt-1">{{ Auth::user()->name }}</h5>
			<h6 class="ps-1 mb-0 font-400 opacity-40">{{ Auth::user()->email }}</h6>
		</div>
		<div class="ms-auto">
			<a href="#" data-bs-toggle="dropdown" class="icon icon-m ps-3"><i class="bi bi-three-dots-vertical font-18 color-theme"></i></a>
			<div class="dropdown-menu  bg-transparent border-0 mt-n1 ms-3">
				<div class="card card-style rounded-m shadow-xl mt-1 me-1">
					<div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
						<a href="/profile" class="color-theme opacity-70 list-group-item py-1"><strong class="font-500 font-12">Edit Profile</strong><i class="bi bi-chevron-right"></i></a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="color-theme opacity-70 list-group-item py-1"><strong class="font-500 font-12">Log Out</strong><i class="bi bi-chevron-right"></i></a>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<span class="menu-divider">Menu Lainnya</span>
<div class="menu-list">
	<div class="card card-style rounded-m p-3 py-2 mb-0">
		<a href="" id="{{ Request::is('*')? "nav-homes":"nav-pages" }}"></a>
		<a href="/" id="{{ Request::is('tiket*')? "nav-homes":"nav-pages" }}"><i class="gradient-blue shadow-bg shadow-bg-xs bi bi-clock-history"></i><span>Riwayat layanan</span><i class="bi bi-chevron-right"></i></a>
		<a href="/" id="{{ Request::is('profile*')? "nav-homes":"nav-pages" }}"><i class="gradient-red shadow-bg shadow-bg-xs bi bi-search"></i><span>Cari Layanan</span><i class="bi bi-chevron-right"></i></a>
		<a href="/" id="{{ Request::is('/')? "nav-homes":"nav-pages" }}"><i class="gradient-green shadow-bg shadow-bg-xs bi bi-heart-fill"></i><span>Favorit</span><i class="bi bi-chevron-right"></i></a>
	</div>
</div>

<span class="menu-divider">Pengaturan</span>
<div class="menu-list">
	<div class="card card-style rounded-m p-3 py-2 mb-0">
		<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-color">
			<i class="gradient-highlight shadow-bg shadow-bg-xs bi bi-palette-fill"></i>
			<span>Warna Tema</span>
			<i class="bi bi-chevron-right"></i>
		</a>
		<a href="#" data-toggle-theme data-trigger-switch="switch-1">
			<i class="gradient-dark shadow-bg shadow-bg-xs bi bi-moon-fill font-13"></i>
			<span>Mode Gelap</span>
			<div class="form-switch ios-switch switch-green switch-s me-2">
				<input type="checkbox" data-toggle-theme class="ios-input" id="switch-1">
				<label class="custom-control-label" for="switch-1"></label>
			</div>
		</a>
	</div>
</div>

<p class="text-center mb-0 mt-n3 pb-3 font-9 text-uppercase font-600 color-theme"> <i class=" font-9 px-1 bi bi-heart-fill color-red-dark"></i> IDEVELOPE <span class="copyright-year"></span>.</p>

</div>


