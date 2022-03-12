@include('layouts.header')
@include('layouts.menu')
@include('layouts.sidebar')
@include('layouts.color_setting')
@include('layouts.notif')

@yield('container')

</div>
<!--End of Page ID-->

<script src="{{ URL::to('/'); }}/scripts/bootstrap.min.js"></script>
<script src="{{ URL::to('/'); }}/scripts/custom.js"></script>
</body>
