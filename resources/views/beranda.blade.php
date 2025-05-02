<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Desain Interior - Beranda</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('images/Iwu.png')}}">
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{asset('css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/icon.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('demos/hosting/hosting.css')}}" />
    </head>
    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
        <!-- start header --> 
        <header class="header-with-topbar">
            <div class="header-top-bar top-bar-dark cover-background" style="background-color: #D77A61; padding-top: 10px; padding-bottom: 10px;">
                <div class="container-fluid">
                    <div class="row align-items-center m-0">
                        <div class="col-6 d-flex align-items-center">
                            <a href="#" class="text-white me-3">
                                <img src="images/flag-id.png" alt="IDN" width="20"> IDN
                            </a>
                            <a href="#" class="text-white me-3">
                                <img src="images/flag-uk.png" alt="ENG" width="20"> ENG
                            </a>
                            <a href="#" class="text-white">
                                <img src="images/flag-kr.png" alt="KR" width="20"> KR
                            </a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="https://elearning.iwu.ac.id/" class="text-white me-3">
                                <i class="bi bi-person"></i> LMS IWU
                            </a>
                            <a href="https://siakad.iwu.ac.id/login" class="text-white me-3">
                                <i class="bi bi-bookmark-check"></i> Dashboard Mahasiswa
                            </a>
                            <a href="https://pmb.iwu.ac.id/" class="text-white">
                                <i class="bi bi-person-fill"></i> PMB IWU
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="images/Iwu.png" data-at2x="images/Iwu.png" alt="Logo" class="default-logo">
                        <span class="brand-text text-black">Desain Interior</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                        <ul class="navbar-nav text-center"> 
                            <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/tentang" class="nav-link">Tentang Kami</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/tentang"><i class="bi bi-info-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Tentang Desain Interior</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/visi-misi-tujuan"><i class="bi bi-flag"></i>
                                            <div class="submenu-icon-content">
                                                <span>Visi, Misi dan Tujuan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/struktur-organisasi"><i class="bi bi-diagram-3"></i>
                                            <div class="submenu-icon-content">
                                                <span>Struktur Organisasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/fasilitas"><i class="bi bi-house-door"></i>
                                            <div class="submenu-icon-content">
                                                <span>Fasilitas</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/dosen"><i class="bi bi-person-fill"></i>
                                            <div class="submenu-icon-content">
                                                <span>Dosen</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/akreditasi"><i class="bi bi-check-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Akreditasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/karir"><i class="bi bi-briefcase"></i>
                                            <div class="submenu-icon-content">
                                                <span>Karir</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/kurikulum" class="nav-link">Akademik</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/kurikulum"><i class="bi bi-journal-bookmark"></i>
                                            <div class="submenu-icon-content">
                                                <span>Kurikulum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/profil-lulusan"><i class="bi bi-person-check"></i>
                                            <div class="submenu-icon-content">
                                                <span>Profil Lulusan</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/artikel" class="nav-link">Publikasi</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/artikel"><i class="bi bi-journal"></i>
                                            <div class="submenu-icon-content">
                                                <span>Artikel</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/berita"><i class="bi bi-newspaper"></i>
                                            <div class="submenu-icon-content">
                                                <span>Berita</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kegiatan"><i class="bi bi-calendar-check"></i>
                                            <div class="submenu-icon-content">
                                                <span>Kegiatan</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="https://pmb.iwu.ac.id/" class="nav-link">Daftar Sekarang</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="https://pmb.iwu.ac.id/"><i class="bi bi-pencil-square"></i>
                                            <div class="submenu-icon-content">
                                                <span>Pendaftaran</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/jadwal-penerimaan"><i class="bi bi-calendar-event"></i>
                                            <div class="submenu-icon-content">
                                                <span>Jadwal Penerimaan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/persyaratan-masuk"><i class="bi bi-check-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Persyaratan Masuk</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header --> 
        <!-- start page title -->
        <div style="max-width: 1200px; margin: 0 auto; padding-left: 15px; padding-right: 15px;">
            <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
                data-parallax-background-ratio="0.5"
                style="background-image: url('{{ asset('images/example2.png') }}'); background-size: cover; background-position: center; min-height: 300px; border-radius: 12px;">
                
                <div class="opacity-extra-medium" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-8 position-relative text-center page-title-extra-large"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            
                            <h1 class="m-auto"
                                style="
                                    color: white;
                                    font-family: 'Helvetica Neue', sans-serif;
                                    font-weight: 700;
                                    font-size: 48px;
                                    letter-spacing: 2px;
                                    text-transform: uppercase;
                                    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                                    line-height: 1.2;
                                    transition: transform 0.3s ease, opacity 0.3s ease;
                                ">
                                Desain Interior
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end page title -->
        <!-- start section -->
        <section class="md-pt-40px sm-pt-20px">
            <div class="container">
                <div class="row justify-content-center md-mb-5">
                    <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <span class="fw-600 fs-22 alt-font text-base-color text-uppercase mb-25px d-block"><span class="w-40px xs-w-30px h-2px bg-base-color d-inline-block align-middle me-15px"></span>Desain Interior</span>
                        @if ($tentang && $tentang->deskripsi)
                        <p class="mb-30px sm-mb-25px">{!! Str::before($tentang->deskripsi, '</p>') . '</p>' !!}</p>
                        @endif
                        <div class="d-inline-block">
                            <a href="/tentang" class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right me-25px xs-me-15px">Tentang Desain Interior<span class="bg-white"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative offset-lg-1">
                        @if ($tentang && $tentang->thumbnail)
                        <div class="text-end w-80 ms-auto" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="border-radius-5px w-100">
                        </div>
                        <div class="w-55 md-w-50 overflow-hidden position-absolute left-15px bottom-minus-20px" data-shadow-animation="true" data-animation-delay="500" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                            <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="w-100 border-radius-5px" />
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-hidden pt-3 lg-pt-6 md-pt-3" style="margin-bottom: -80px;"> 
            <div class="container">
            <span class="fw-600 fs-22 alt-font text-base-color text-uppercase mb-25px d-block"><span class="w-40px xs-w-30px h-2px bg-base-color d-inline-block align-middle me-15px"></span>Visi, Misi dan Tujuan</span>
            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- Visi -->
                <div class="col process-step-style-05 position-relative hover-box md-mb-40px">
                    <div class="process-step-item">
                        <div class="process-content last-paragraph-no-margin d-flex align-items-center" style="margin-bottom: 10px;">
                            <a href="/visi-misi-tujuan" class="icon-circle bg-dark-gray text-white d-flex align-items-center justify-content-center me-2 text-decoration-none">
                                <i class="fas fa-eye"></i>
                            </a>
                            <span class="alt-font fs-22 fw-600 text-uppercase text-dark-gray mb-2">Visi</span>
                        </div>
                        @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                        <p class="lh-22 mt-2 ms-3">{!! $visiMisiTujuan->visi !!}</p>
                        @endif
                    </div>
                </div>
                <!-- Misi -->
                <div class="col process-step-style-05 position-relative hover-box md-mb-40px">
                    <div class="process-step-item">
                        <div class="process-content last-paragraph-no-margin d-flex align-items-center" style="margin-bottom: 10px;">
                            <a href="/visi-misi-tujuan" class="icon-circle bg-dark-gray text-white d-flex align-items-center justify-content-center me-2 text-decoration-none">
                                <i class="fas fa-bullhorn"></i>
                            </a>
                            <span class="alt-font fs-22 fw-600 text-uppercase text-dark-gray">Misi</span>
                        </div>
                        @if ($visiMisiTujuan && $visiMisiTujuan->misi)
                        <p class="lh-22 mt-2 ms-3">{!! $visiMisiTujuan->misi !!}</p>
                        @endif
                    </div>
                </div>
                <!-- Tujuan -->
                <div class="col process-step-style-05 position-relative hover-box">
                    <div class="process-step-item">
                        <div class="process-content last-paragraph-no-margin d-flex align-items-center" style="margin-bottom: 10px;">
                            <a href="/visi-misi-tujuan" class="icon-circle bg-dark-gray text-white d-flex align-items-center justify-content-center me-2 text-decoration-none">
                                <i class="fas fa-bullseye"></i>
                            </a>
                            <span class="alt-font fs-22 fw-600 text-uppercase text-dark-gray">Tujuan</span>
                        </div>
                        @if ($visiMisiTujuan && $visiMisiTujuan->tujuan)
                        <p class="lh-22 mt-2 ms-3">{!! $visiMisiTujuan->tujuan !!}</p>
                        @endif
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- CSS tambahan -->
        <style>
            .icon-circle {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                font-size: 18px;
                transition: background-color 0.3s ease;
            }
            .icon-circle:hover {
                opacity: 0.85;
            }
        </style>
        <!-- end section -->
        <!-- start section -->
        <section class="md-pt-40px sm-pt-20px" style="padding-top: 0px; margin-bottom: -120px;">
            <div class="container">
                <div class="row justify-content-center md-mb-5">
                    <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <span class="fw-600 fs-22 alt-font text-base-color text-uppercase mb-25px d-block"><span class="w-40px xs-w-30px h-2px bg-base-color d-inline-block align-middle me-15px"></span>Kata Sambutan</span>
                        @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                        <p class="section-text">
                            {!! Str::before($pimpinanStaff->kata_sambutan, '</p>') . '</p>' !!}
                        </p>
                        @endif
                        <div class="section-text fs-18 text-dark-gray mt-5px mb-10px">
                            @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                            <span class="fw-600">{!! $pimpinanStaff->nama !!},</span> {!! $pimpinanStaff->status !!}
                            @endif
                        </div>
                        <div class="d-inline-block">
                            <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right me-25px xs-me-15px">Lihat Selengkapnya<span class="bg-white"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative offset-lg-1">
                        @if ($pimpinanStaff && $pimpinanStaff->foto)
                        <div class="text-end w-80 ms-auto" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="" class="border-radius-5px w-100">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 text-center text-md-start sm-mb-20px">
                    <span class="fw-600 fs-22 alt-font text-base-color text-uppercase mb-25px d-block"><span class="w-40px xs-w-30px h-2px bg-base-color d-inline-block align-middle me-15px"></span>Berita Terbaru</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="/berita" class="btn btn-large btn-round-edge btn-dark-gray btn-slide-right me-25px xs-me-15px"><span></span>Jelajahi Semua Berita</a>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog list -->
                        @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                    class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->deskripsi, 120) !!}
                                    </p>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                        <div class="me-auto">
                                            @if ($item->waktu)
                                            <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- end blog list -->
                    </ul>
                </div>
            </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="bg-gradient-aztec-green position-relative">
            <div class="position-absolute left-minus-100px top-25px">
                <img src="{{asset('images/demo-elearning-bg-05.png')}}" alt="" class="w-80">
            </div>
            <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('images/vertical-line-bg-small.svg')"></div>
            <div class="container overlap-section">
            </div>
            <div class="container footer-dark text-center text-sm-start position-relative"> 
                <div class="row mb-0 sm-mb-7 xs-mb-30px justify-content-center">
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px"> 
                        <span class="fw-500 fs-18 d-block text-black mb-10px">Kontak</span>
                        <ul>
                            <li><a href="demo-elearning-courses.html" class="fs-14"><i class="feather icon-feather-phone-call"></i> (022) 6019845</a></li>
                            <li><a href="demo-elearning-courses.html" class="fs-14"><i class="feather icon-feather-mail"></i> info@iwu.ac.id</a></li>
                            <li><a href="https://maps.app.goo.gl/8m6fkLFbxay8rRAV8" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 1: Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</a></li>
                            <li><a href="https://maps.app.goo.gl/XzVxzyqVsKZWTv5N6" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 2: Jl. Raya Gading Tutuka No.18, Cingcin, Kec. Soreang, Kabupaten Bandung, Jawa Barat 40911</a></li>
                            <li><a href="https://maps.app.goo.gl/e2J91drbB2esKqHeA" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 3: Jl. Raya Soreang - Banjaran No.27 Km 2, Tanjungsari, Kec. Cangkuang, Kabupaten Bandung, Jawa Barat 40238</a></li>
                            <li><a href="https://maps.app.goo.gl/LSpLoHomb3FbMW3H8" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 4: Jl. Sukasenang Raya, Cibogo, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40391</a></li>
                            <li><a href="https://maps.app.goo.gl/cPstzHGRWwy63zBB6" class="fs-14"><i class="feather icon-feather-map-pin"></i> Kampus 5: Jl. PDAM No. 27 Sukagalih, Kec. Sukajadi, Kota Bandung, Jawa Barat 40163</a></li>
                        </ul> 
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin xs-mb-30px"> 
                        <span class="fw-500 fs-18 d-block text-black mb-10px">Situs Terkait</span>
                        <ul>
                            <li><a href="https://elearning.iwu.ac.id/" class="fs-14"><i class="feather icon-feather-chevron-right"></i> LMS IWU</a></li>
                            <li><a href="https://siakad.iwu.ac.id/login" class="fs-14"><i class="feather icon-feather-chevron-right"></i> Dashboard Mahasiswa</a></li>
                            <li><a href="https://pmb.iwu.ac.id/" class="fs-14"><i class="feather icon-feather-chevron-right"></i> PMB IWU</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-12 col-sm-6 text-md-center text-lg-start">
                        <span class="fw-500 fs-18 d-block text-black mb-10px">Media Sosial</span>
                        <ul>
                            <li><a href="https://www.instagram.com/iwuidn/" class="fs-14"><i class="feather icon-feather-instagram"></i> iwuidn</a></li>
                            <li><a href="https://www.youtube.com/@iwuchannel" class="fs-14"><i class="feather icon-feather-youtube"></i> IWU CHANNEL OFFICIAL</a></li>
                            <li><a href="https://www.facebook.com/IWUIndonesia/?_rdc=1&_rdr#" class="fs-14"><i class="feather icon-feather-facebook"></i> International Women University</a></li>
                            <li><a href="https://x.com/i/flow/login?redirect_after_login=%2Fiwuindonesia" class="fs-14"><i class="feather icon-feather-twitter"></i> Twitter</a></li>
                        </ul> 
                    </div>
                    <!-- end footer column -->
                </div> 
                <div class="row align-items-center footer-bottom border-top border-color-transparent-white-light pt-30px g-0">
                    <!-- start copyright -->
                    <div class="col-xl-12 d-flex justify-content-center align-items-center">
                        <p class="fs-16">&copy; 2025 International Women University</p>
                    </div>
                    <!-- end copyright -->
                </div>
            </div> 
        </footer>
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll to top</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script> 
    </body>
</html>