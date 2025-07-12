@extends('layouts.app')

@section('title', 'Menu Paket')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Menu Paket</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($packageServices as $item)

            <div class="col-md-3 text-center ftco-animate">
                <div class="menu-wrap">
                    <a href="#" class="menu-img img mb-4" style="background-image: url({{ asset('storage/'. $item->image) }});"></a>
                    <div class="text">
                        <h3><a href="{{ route('package.service.show', $item->slug) }}">{{ $item->name }}</a></h3>
                        <p>{{ \Str::limit($item->description, 30) }}</p>
                        <p class="price"><span>Rp {{ number_format($item->price, 0, ',', '.') }}</span></p>
                        <p><a href="{{ route('package.service.show', $item->slug) }}" class="btn btn-white btn-outline-white">Lihat Paket</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
