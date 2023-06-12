@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row mb-3">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                </ol>
            </nav>

        </div>
    </div>


    <div class="row">
        <div class="col-md-9">
            <h2>List <strong>Jersey</strong></h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search . . ." aria-label="Search" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>


    <!-- Best product -->
    <section class="product mt-2 mb-5">
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col-md-3 mb-4">
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
                                <a href="#" class="btn btn-dark btn-block">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col">
                    {{ $products -> Links() }}
                </div>
            </div>
        </div>
    </section>
</div>


@endsection