<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>AN3 - {{ $judul }}</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('/'); }}/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/'); }}/fonts/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/'); }}/styles/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('/'); }}/app/icons/icon-192x192.png"></head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
        @if ($header==1)
        <a data-bs-toggle="offcanvas" data-bs-target="#menu-main" href="#"><i class="bi bi-list color-theme"></i></a>
        @elseif ($header==0)
        <a data-back-button href="{{ $kembali }}"><i class="bi bi-caret-left-fill font-11 color-theme ps-2"></i></a>
        <a href={{ $kembali }} class="header-title color-theme font-13">Kembali</a>
        @else

        @endif
        <a href="#" class="header-title color-theme">{{ $judul }}</a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-color"><i class="bi bi-palette-fill font-13 color-highlight"></i></a>
		<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-bell"><em class="badge bg-highlight ms-1">3</em><i class="font-14 bi bi-bell-fill"></i></a>
        <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
        <a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
    </div>
