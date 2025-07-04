@extends('layouts.app')

@section('content')
        <!-- Start Section -->
        <section id="profil" class="mb-0 pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                            Persyaratan Masuk
                        </h5>

                        <!-- Paragraf -->
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                        data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":400, "easing": "easeOutQuad" }'>
                            Untuk dapat diterima sebagai mahasiswa Program Studi Desain Interior di Universitas Wanita Internasional, calon mahasiswa harus memenuhi persyaratan sebagai berikut:
                        </p>

                        <!-- Table with fade-in animation -->
                        <div class="table-responsive"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th style="width: 4%;">No</th>
                                        <th>Persyaratan Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1; @endphp
                                    @foreach ($persyaratanMasuk as $item)
                                    <tr>
                                        <td class="fs-15">{{ $counter++ }}</td>
                                        @if ($item->persyaratan)
                                        <td style="text-align: left;" class="fs-15">{!! $item->persyaratan !!}</td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection