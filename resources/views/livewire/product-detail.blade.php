@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Jersey</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jersey Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{ $product -> nama }}</strong>
            </h2>
            <h4>
                {{ number_format( $product -> harga ) }}
                @if ($product -> is_ready == 1)
                <span class="badge text-bg-success"><i class="fas fa-check"></i> Ready</span>
                @else
                <span class="badge text-bg-danger"><i class="fas fa-times"></i> Habis</span>
                @endif
            </h4>
            <hr>

            <div class="row">
                <div class="col">
                    <table class="table mt-5" style="border-top: hidden;">
                        <tr>
                            <td>Liga</td>
                            <td>:</td>
                            <td>
                                <img src="{{ url('assets/liga') }}/{{ $product->liga->gambar }}" class="img-fluid" width="50">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $product -> jenis }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $product -> berat }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection