<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodKapp - {{ $judul }}</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">


</head>
<body class='sc5'>
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
        <form action="https://themefie.com/html/foodkapp/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <div class="single-restuarent-area">
        <div class="single-banner-area" style="background-image: url(assets/img/preview.png);">
            <div class="container" style="position: relative;">
                <a class="btn back-page-btn" href="/"><i class="ri-arrow-left-s-line"></i></a>
                <div class="restuarent-details">
                    <div class="media">
                        <div class="thumb">
                            <img src="assets/img/restaurant/icon.png" alt="img">
                        </div>
                        @foreach ($penyedia_layanans as $penyedia_layanan)
                        <div class="media-body">
                            <h3>{{ $penyedia_layanan->nama_penyedia }}</h3>
                            <p>{{ $penyedia_layanan->nama_kontak }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="rating">
                        <span>
                            <p>{{ $penyedia_layanan->alamat_1 }}</p><p>{{ $penyedia_layanan->alamat_2 }}</p>
                        </span>
                        <p>{{ $penyedia_layanan->no_telp }}</p>
                        <p>{{ $penyedia_layanan->alamat_email }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-page-details">
            <div class="container">
                <a class="btn btn-discount w-100" href="#"><label> Daftar Layanan {{ $penyedia_layanan->nama_penyedia }}</label></a>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        @foreach ($layanans as $layanan )

                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="assets/img/item/layanan.png" alt="img">
                            </div>
                            <div class="details">
                                <h6><a href="#">{{ $layanan->nama_singkat }}</a></h6>
                                <p>{{ $layanan->penjelasan_1 }} </p>
                                <p>{{ $layanan->penjelasan_2 }}</p>
                            </div>
                            <form class="row gy-1 pt-75" action="/daftar">
                                <div class="col-12 col-md-12 mt-3">
                                      @foreach ($penyedia_layanans as $penyedia_layanan )
                                      @endforeach
                                </div>
                                    <div class="col-12 text-center mt-3 pt-20">
                                        <button type="submit" class="btn back-page-btn we-100"><img src="https://img.icons8.com/ios-glyphs/30/000000/plus-math.png"/></button>
                                    </div>
                        <input type="hidden" name="penyedia_layanan_id" value="{{$layanan->penyedia_layanan_id}}">
                        <input type="hidden" name="layanan_id" value="{{$layanan->id}}">
                              </form>
                          {{-- <a class="btn back-page-btn" href="/daftar/{{ $pendaftaran->layanan->nama_singkat }}" ><img src="https://img.icons8.com/ios-glyphs/30/000000/plus-math.png"/></a> --}}
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

@extends('app.layout.menu')
