@extends('layouts.app')

@section('content')
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
                            <a href="{{ url('/visi-misi-tujuan?tab=visi') }}" class="icon-circle bg-dark-gray text-white d-flex align-items-center justify-content-center me-2 text-decoration-none">
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
                            <a href="{{ url('/visi-misi-tujuan?tab=misi') }}" class="icon-circle bg-dark-gray text-white d-flex align-items-center justify-content-center me-2 text-decoration-none">
                                <i class="fas fa-bullhorn"></i>
                            </a>
                            <span class="alt-font fs-22 fw-600 text-uppercase text-dark-gray mb-2">Misi</span>
                        </div>
                        @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                            <p class="lh-35 mt-0 ms-3">
                                {!! $visiMisiTujuan->misi[0]['text'] !!}
                            </p>
                        @endif
                    </div>
                </div>
                <!-- Tujuan -->
                <div class="col process-step-style-05 position-relative hover-box">
                    <div class="process-step-item">
                        <div class="process-content last-paragraph-no-margin d-flex align-items-center" style="margin-bottom: 10px;">
                            <a href="{{ url('/visi-misi-tujuan?tab=tujuan') }}" class="icon-circle bg-dark-gray text-white d-flex align-items-center justify-content-center me-2 text-decoration-none">
                                <i class="fas fa-bullseye"></i>
                            </a>
                            <span class="alt-font fs-22 fw-600 text-uppercase text-dark-gray">Tujuan</span>
                        </div>
                        @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                            <p class="lh-35 mt-0 ms-3">
                                {!! $visiMisiTujuan->tujuan[0]['text'] !!}
                            </p>
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
                        <div class="ms-7" data-animation-delay="500" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img 
                                src="{{ asset('storage/' . $pimpinanStaff->foto) }}"
                                alt="Foto Pimpinan"
                                class="img-fluid rounded"
                                style="max-width: 250px;"
                            >
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
@endsection