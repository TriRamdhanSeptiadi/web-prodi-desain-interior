@extends('layouts.app')

@section('content')
        <!-- Start Section -->
        <section id="profil-lulusan" class="mb-0 pb-0" data-anime='{ "opacity": [0, 1], "translate": [0, 0], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }' style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden" data-anime='{ "opacity": [0, 1], "translateX": [30, 0], "duration": 600, "delay": 200, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700" data-anime='{ "opacity": [0, 1], "translate": [0, 0], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>Profil Lulusan Desain Interior</h5>

                        <!-- Paragraf -->
                        @if ($profilLulusan->first() && $profilLulusan->first()->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify; margin-top: 30px;" data-anime='{ "opacity": [0, 1], "translate": [0, 0], "duration": 600, "delay": 400, "staggervalue": 400, "easing": "easeOutQuad" }'>
                            {!! $profilLulusan->first()->teks !!} 
                        </p>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 25%;">Profil Lulusan</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $counter = 1;
                                    @endphp
                                    @foreach ($profilLulusan as $item)
                                    <tr data-anime='{ "opacity": [0, 1], "translateX": [30, 0], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                        <td class="fs-15">{{ $counter }}</td>
                                        @if ($item->profil_lulusan)
                                        <td class="fs-15">{!! $item->profil_lulusan !!}</td>
                                        @endif
                                        <td style="text-align: justify;" class="fs-15">
                                            <ul style="list-style-type: disc; padding-left: 20px;">
                                                @if ($item->deskripsi)
                                                <li>{!! $item->deskripsi !!}</li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection