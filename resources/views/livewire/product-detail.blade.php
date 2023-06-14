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
                            <td>berat</td>
                            <td>:</td>
                            <td>{{ $product -> berat }} kg</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>
                                <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model.defer="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="name" autofocus>

                                @error('jumlah_pesanan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>

                        @if($jumlah_pesanan > 1)


                        @else
                        <tr>
                            <td colspan="3"><strong>Namaset </strong>(Opsional)</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" value="{{ old('nama') }}" required autocomplete="name" autofocus>

                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td>
                                <input id="nomor" type="number" class="form-control @error('nomor') is-invalid @enderror" wire:model="nomor" value="{{ old('nomor') }}" required autocomplete="name" autofocus>

                                @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>
                        @endif

                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-dark btn-block"><i class="fas fa-shopping-cart"></i> Masukkan Keranjang</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection