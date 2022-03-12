<!-- Footer Bar-->
@if ($menu==0)

@elseif ($menu==1)
<div id="footer-bar" class="footer-bar footer-bar-detached">
    <a href="/user" class="{{ Request::is('profile*')? "active-nav":"" }}"><i class="bi bi-person-fill font-15"></i><span>Profile</span></a>
    <a href="/tiket" class="{{ Request::is('tiket*')? "active-nav":"" }}"><i class="bi bi-ticket-detailed-fill font-17"></i><span>Tiket anda</span></a>
    <a href="/" class="{{ Request::is('/','dashboard')? "active-nav":"" }}"><i class="bi bi-house-fill font-16"></i><span>Home</span></a>
    <a href="layanan" class="{{ Request::is('/layanan')? "active-nav":"" }}"><i class="bi bi-star-fill font-16"></i><span>Layanan</span></a>
    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-main"><i class="bi bi-list"></i><span>Menu</span></a>
</div>
@else

@endif
