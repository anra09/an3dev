<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AN3 - {{ $judul }}</title>
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
<body class='sc5 bg-white'>
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
    <!-- //. search Popup <div class="single-banner-area" style="background-image: url(assets/img/banner/home.png);" > -->

 <div class="single-page-area">
   <div class="img-fluid" style="background-image: url(assets/img/Home_1.png);" >
       <br>

            <div class="container">
                <div class="order-profile">
                    <div class="thumb">
                        <img class="rounded-circle img-thumbnail" height="5px" src="{{ Auth::user()->profile_photo_url }}" alt="img">
                    </div>
                    <div class="media-body">

                        <h6>{{ Auth::user()->name }}</h6>
                        <font size="1" color="white">{{ Auth::user()->email }}</font>

                    </div>
                </div>

            <!-- Search -->
                <div class="row" >
                    <div class="col">
                        <!-- Search COBA
                            <div class="input-group mb-3">
                                <button class="btn btn-white" type="submit"> <img src="assets/img/icon/search.svg" alt=" "></button>
                                <input type="text" class="form-control" placeholder="Cari.." name="search">
                            </div>
                        --->
                            <div class="input-group mb-3">

                              <input type="text" class="form-control" placeholder="Cari..." name="search">
                              <span class="input-group-text" id="basic-addon1"><img src="assets/img/icon/search.svg"></span>
                            </div>
                    </div>
                </div>

                @if ($pendaftarans->count() !=0)
                <div class="card-profile">
                    <div class="invite-wrap bg-danger ">
                        <div class="container text-center">
                         <br>
                         @foreach ($pendaftarans as $pendaftaran)
                            <div class="row justify-content-around">
                                <div class="col">
                                    <font size="2" color="black" face="sans-serif"> Anda Terdaftar Di </font>
                                    <br>
                                    <br>
                                    <font size="4" color="black" face="Roboto" class="text-bold"> {{ $pendaftaran->penyedia_layanan->nama_penyedia }} </font>
                                    <br>
                                    <br>
                                    <font size="2" color="black" face="Roboto" class="form-label" for="No.anda">Pada Tanggal</font>
                                    <br>
                                    <br>
                                    <font size="4" color="black" face="Roboto" class="form-temp text-center">{{ $pendaftaran->tanggal_layanan }}</font>
                                </div>
                                <div class="col order-1">
                                    <font size="2" color="black" face="sans-serif"> Dengan Layanan </font>
                                    <br>
                                    <br>
                                    <font size="4" color="black" face="Roboto" class="text-bold"> {{ $pendaftaran->layanan_id }} </font>
                                    <br>
                                    <br>
                                    <font size="2" color="black" face="Roboto" class="form-label" for="No.anda">Antrian Anda</font>
                                    <br>
                                    <br>
                                    <font size="4" color="black" face="Arial" class="form-temp text-center text-bold">{{ $pendaftaran->no_antrian }}</font>
                                </div>
                            </div>
                            <font>___________________________</font>
                            @endforeach

                        </div>
                    </div>
                                    <br>
                </div>

                @else
                <div class="card-profile">
                    <div class="invite-wrap bg-danger ">
                        <div>
                        <p>Anda Tidak Terdaftar Dilayanan Apapun</p>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-base" data-bs-toggle="modal" data-bs-target="#lengkapidatadiri">DAFTAR</button>
                    </div>
                                    <br>
                </div>

                @endif

            </div>
        </div>
        <div class="single-page-details">
            <div class="container">
                <br>
                <br>
                <div class="single-product-wrap">
                    <div class="home-product-slider owl-carousel">
                @foreach ($penyedia_layanans as $penyedia_layanan)
                <div class="item">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <span class="tag">{{ $penyedia_layanan->kegiatan_usaha }}</span>
                            @if ($penyedia_layanan->foto)
                            <img src="{{ asset('storage/'.$penyedia_layanan->foto) }}" alt="img">
                            @else
                            <img src="assets/img/preview.png" alt="img">
                            @endif
                            </form>
                        </div>
                        <div class="details">
                            <h6><a href="#">{{ $penyedia_layanan->nama_penyedia }}</a> <span></span></h6>
                            <div class="ratting">
                                <label>Alamat </label>
                                <span>{{ $penyedia_layanan->alamat_1 }}, {{ $penyedia_layanan->alamat_2 }}, {{ $penyedia_layanan->alamat_3 }}, {{ $penyedia_layanan->alamat_4 }}, {{ $penyedia_layanan->alamat_kodepos }}</span>
                            </div>
                            <br>
                            <label>{{ $penyedia_layanan->nama_kontak }} </label>
                            <span class="ms-3">{{ $penyedia_layanan->no_telp }}</span>
                        </div>
                        
                        <div class="col-12 text-center">
                            <form action="/layanan">
                                <input type="hidden" name="layanan" value="{{ $penyedia_layanan->id }}">
                                <button type="submit" class="btn btn-base">Lihat Layanan</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- search not found -->

    @include('app.layout.menu')
