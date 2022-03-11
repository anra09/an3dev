@include('layouts.header')
@include('layouts.menu')
	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-homes" data-menu-load=""
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>

	<!-- Menu Highlights-->
	<div id="menu-color" data-menu-load="menu-highlights.html"
		style="height:340px" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
	</div>

	<!-- Main Bell-->
	<div id="menu-bell"	data-menu-load="menu-bell.html"
		style="height:400px;" class="offcanvas offcanvas-top offcanvas-detached rounded-m">
	</div>

@yield('container')

</div>
<!--End of Page ID-->

<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/custom.js"></script>
</body>
