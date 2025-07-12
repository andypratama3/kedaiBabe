@extends('layouts.app')

@section('title', 'Menu')



@section('content')

 <section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}" class="btn btn-secondary btn-outline-white">Beranda</a></span> <span><a href="#menu" class="btn btn-primary">Lihat Menu</a></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

<section class="ftco-section" id="menu">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Menu</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        @foreach ($products as $categoryName => $items)
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4 mt-4">{{ $categoryName }}</h2>
                    <p class="flip">
                        <span class="deg1"></span>
                        <span class="deg2"></span>
                        <span class="deg3"></span>
                    </p>
                </div>
            </div>

            <div class="row no-gutters d-flex">
                @foreach ($items as $index => $item)
                    @php
                        $positionInBlock = ($index % 6) + 1;
                        $imgClass = $positionInBlock >= 4 ? 'order-lg-last' : '';
                    @endphp

                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="{{ asset('storage/' . $item->image) }}" class="img {{ $imgClass }}"
                            data-lightbox="{{ $categoryName }}" data-title="{{ $item->name }}"

                            style="background-image: url('{{ asset('storage/' . $item->image) }}'); background-size: cover; background-position: center; border-radius: 10px; width: 50%;">
                            </a>
                            <div class="text p-4 d-flex flex-column justify-content-between" style="width: 50%;">
                                <div>
                                    <h3>{{ $item->name }}</h3>
                                    <p class="mb-3">{{ $item->description ?? 'Deskripsi belum tersedia.' }}</p>
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
        @endforeach
    </div>

</section>

@endsection
