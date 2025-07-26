@extends('layouts.app')

@section('title', 'Beranda')

@push('css')
    <style>
        .home-slider .slider-item img{
            border-radius: 10px;

        }
    </style>
@endpush

@section('content')

<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Rumah Makan Prasmanan</span>
                    <h1 class="mb-4">Kedai Babe Samarinda</h1>
                    <p class="mb-4 mb-md-5">
                        Nikmati berbagai pilihan masakan khas Nusantara dengan konsep prasmanan. Sajian hangat setiap hari di jantung kota Samarinda, Kalimantan Timur.
                    </p>
                    <p>
                        <a href="{{ route('menu') }}" class="btn btn-primary btn-outline-white p-3 px-xl-4 py-xl-3" style="border-radius: 10px;">Lihat Menu</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @foreach ($heros as $item)
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    @if ($loop->even)
                        {{-- Item genap: gambar di kanan --}}
                        <div class="col-md-6 col-sm-12 ftco-animate">
                            <span class="subheading">New Menu~⭐️</span>
                            <h1 class="mb-4">{{ $item->name }}</h1>
                            {{-- <p class="mb-4 mb-md-5"></p> --}}
                            <p>
                                <a href="{{ route('menu') }}" class="btn btn-primary btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                            </p>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid" alt="">
                        </div>
                    @else
                        {{-- Item ganjil: gambar di kiri --}}
                        <div class="col-md-6 ftco-animate order-md-last">
                            <span class="subheading">New Menu~⭐️</span>
                            <h1 class="mb-4">{{ $item->name }}</h1>
                            {{-- <p class="mb-4 mb-md-5"></p> --}}
                            <p>
                                <a href="{{ route('menu') }}" class="btn btn-primary btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                            </p>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid" alt="">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</section>

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>0813-5228-6922</h3>
                            <p>Kedai Babe Kuliner Nusantara</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Jl. KH. Harun Nafsi No.1200, Rapak Dalam, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75251</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Buka Setiap Hari</h3>
                            <p>07:00 - 22:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="https://web.facebook.com/people/Kedai-BABE-Samarinda/100063596827516/" target="__blank"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/kedaibabe.official/" target="__blank"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url('{{ asset('assets/images/kedai_babe.jpeg') }}');"></div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate">
            <h2 class="mb-4">
                Selamat Datang di
                <img src="{{ asset('assets/images/logo.jpg') }}" width="40px" style="border-radius: 10px;" alt="Logo">
                <strong>Kedai Babe</strong> Prasmanan
            </h2>
        </div>
        <div>
            <p>
                Kedai Babe adalah rumah makan dengan konsep <strong>prasmanan</strong> yang berlokasi di Samarinda.
                Kami menyajikan berbagai pilihan menu rumahan yang lezat, higienis, dan terjangkau.
                Dengan sistem ambil sendiri, pelanggan bebas memilih lauk dan porsi sesuai selera.
            </p>
            <p>
                Suasana tempat yang nyaman dan pelayanan ramah menjadikan Kedai Babe tempat yang tepat untuk makan siang, makan malam, hingga acara keluarga atau kantor.
                Kami selalu berkomitmen menghadirkan masakan khas Nusantara yang menggugah selera setiap harinya.
            </p>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Layanan Kami</h2>
                <p>Kedai Babe menghadirkan kenyamanan dalam menyantap makanan dengan konsep prasmanan, pilihan menu beragam, dan layanan cepat untuk semua pelanggan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Prasmanan Rumahan</h3>
                        <p>Ambil sendiri menu favoritmu dengan berbagai pilihan lauk, sayur, dan pelengkap khas rumahan yang menggugah selera.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-bicycle"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Layanan Antar</h3>
                        <p>Pesan makanan favoritmu secara online dan kami siap mengantarkan langsung ke rumah atau kantor dengan cepat dan hangat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-chef"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Resep Khas</h3>
                        <p>Masakan kami dibuat dari resep warisan keluarga yang dijaga keasliannya, penuh cita rasa dan dibuat dengan bahan berkualitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Menu</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex mx-5">
            @foreach ($products as $index => $item)
                @php
                    $positionInBlock = ($index % 6) + 1;
                    $imgClass = $positionInBlock >= 4 ? 'order-lg-last' : '';
                @endphp

                <div class="col-lg-4 d-flex ftco-animate mb-4">
                    <div class="services-wrap d-flex">
                        <a href="{{ asset('storage/' . $item->image) }}" class="img {{ $imgClass }}"
                            data-lightbox="{{ $item->name }}" data-title="{{ $item->name }}"

                            style="background-image: url('{{ asset('storage/'. $item->image) }}'); background-size: cover; background-position: center; border-radius: 10px; width: 50%;">
                        </a>
                        <div class="text p-4 d-flex flex-column justify-content-between" style="width: 50%;">
                            <div>
                                <h3>{{ $item->name }}</h3>
                                <p class="mb-3">{{ \Str::limit($item->description, 30) }}</p>
                            </div>
                            <p class="price">
                                <span>Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                                <a href="#" style="font-size: 10px; border-radius: 10px;" class="ml-2 btn btn-{{ $item->is_active ? 'success' : 'danger' }} btn-outline-white }}">{{ $item->is_active ? 'Tersedia' : 'Tidak Tersedia' }}</a>

                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Menu Paket</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($packageServices as $item)
                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ asset('storage/'. $item->image) }});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $item->name }} | {{ $item->slug }}</span></h3>
                                <span class="price">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            </div>
                            <div class="d-block">
                                <p>{{ \Str::limit($item->description, 30) }}</p>
                                <a href="{{ route('package.service.show', $item->slug) }}" class="btn btn-primary btn-sm mt-2 float-right" style="border-radius: 10px;">Lihat Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="owl-carousel gallery-carousel">
            @foreach ($galleries as $item)
                @php
                    $fotos = is_string($item->image) ? json_decode($item->image, true) : $item->image;
                @endphp

                @if(is_array($fotos))
                    @foreach ($fotos as $foto)
                        <div class="item ftco-animate">
                            <a href="{{ asset("storage/$foto") }}"
                               class="gallery img d-flex align-items-center justify-content-center"
                               style="background-image: url('{{ asset("storage/$foto") }}');
                                      background-size: cover;
                                      background-position: center;
                                      height: 300px;
                                      border-radius: 10px;"
                               data-lightbox="gallery">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>
</section>


<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-diet"></span></div>
                                <strong class="number" data-number="30">0</strong>
                                <span>Menu Masakan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-chef"></span></div>
                                <strong class="number" data-number="15">0</strong>
                                <span>Koki Berpengalaman</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-laugh"></span></div>
                                <strong class="number" data-number="5000">0</strong>
                                <span>Pelanggan Bahagia</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-delivery-truck"></span></div>
                                <strong class="number" data-number="1200">0</strong>
                                <span>Pesanan Antar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d694.8099210143774!2d117.12244942194359!3d-0.5467524921572738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6816848f9e045%3A0x6f2a337eef73e78e!2sKedai%20Babe!5e0!3m2!1sid!2sid!4v1752254880780!5m2!1sid!2sid" width="800" height="550" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Sosial Media</h3>
                    <div class="d-md-flex">
                        <div class="form-group align-items-center">
                            <p>Instagram</p>
                            <span class="icon-instagram">@kedaibabe.official</span>

                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group align-items-center">
                            <p>Facebook</p>
                            <span class="icon-facebook"> Kedai-BABE-Samarinda </span>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group align-items-center">
                            <p>WhtasApp</p>
                            <span>+6281532286922</span>
                            <br>
                            <a href="https://wa.me/6281532286922" class="btn btn-success btn-sm" target="__blank" style="border-radius: 10px;"><span class="icon-whatsapp"></span> Kirim Pesan</a>
                        </div>
                    </div>
                   <div class="d-md-flex">
                    <div class="form-group align-items-center">
                        <p class="text-white text-center">Terima kasih telah mengunjungi <strong>Kedai Babe Samarinda</strong>. Kami berharap Anda menikmati hidangan kami. Kepuasan Anda adalah kebahagiaan kami!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script>
        $(document).ready(function(){
        $('.gallery-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive:{
                0:{ items:1 },
                600:{ items:2 },
                1000:{ items:4 }
            }
        });

        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel': false
        });
    });
    </script>
@endpush
@endsection
