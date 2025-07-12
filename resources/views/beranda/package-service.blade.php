@extends('layouts.app')

@section('title', "Package Service $packageService->name")

@section('content')

<section class="img mt-4" >
    <div class="container py-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-12 ftco-animate heading-section">
                <a href="{{ route('package') }}" class="btn btn-primary float-left" style="border-radius: 10px;">Kembali</a>
            </div>
            <div class="col-md-12 heading-section ftco-animate text-center">
                <h2 class="mb-4">Paket {{ $packageService->name }}</h2>
            </div>
            <div class="col-md-12 d-flex align-items-center ftco-animate">
                <img src="{{ asset('storage/' . $packageService->image) }}"
                     alt="{{ $packageService->name }}"
                     class="img-fluid w-25"
                     style="border-radius: 10px;">

                <div class="ml-4">
                    <h3 class="text-white">{{ $packageService->name }}</h3>
                    <p style="color:red;">Rp. {{ number_format($packageService->price, 0, ',', '.') }}</p>
                    <p class="text-white">{{ $packageService->description }}</p>
                </div>
            </div>
        </div>

        <h3>List Menu</h3>
        <div class="row">
        @foreach ($packageService->products as $item)
            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('storage/'. $item->image) }});"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3> <span>{{ $item->name }} ({{ $item->pivot->quantity }}x) </span>
                            </h3>
                        </div>
                        <a href="#" style="font-size: 10px; border-radius: 10px;" class="ml-2 btn btn-{{ $item->is_active ? 'success' : 'danger' }} btn-outline-white }}">{{ $item->is_active ? 'Tersedia' : 'Tidak Tersedia' }}</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

@endsection
