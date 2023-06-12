@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Banner -->
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png') }}" alt="">
    </div>

    <!-- Pilih liga -->
    <section class="pilih-liga mt-4">
        <h3><strong>PILIH LIGA</strong></h3>
        <div class="row mt-4">
            @foreach ($ligas as $liga)
            <div class="col">
                <a href="{{ route('products.liga', $liga->id) }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Best product -->
    <section class="product mt-5 mb-5">
        <h3>
            <strong>BEST PRODUCTS</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right hantu"><i class="fas fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid" alt="">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product -> nama }}</strong></h5>
                                <h5>Rp. {{ number_format($product -> harga) }}</h5>
                            </div>
                        </div>

                        <!-- details -->
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</div>


@endsection