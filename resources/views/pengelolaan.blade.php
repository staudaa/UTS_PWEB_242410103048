@extends('layouts.app')
@section('title', 'Pengelolaan')
@section('content')
    <div class="container-fluid">
        <h4 class="mb-3">Data Bunga</h4>
        <div class="table-responsive mb-4">
            <table class="table table-hover table-pink align-middle">
                <thead>
                    <tr>
                        <th>Flow-r</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataBunga as $b)
                        <tr>
                            <td><i class="bi bi-flower1"></i></td>
                            <td>{{ $b['nama'] }}</td>
                            <td>{{ $b['kategori'] }}</td>
                            <td>{{ $b['harga'] }}</td>
                            <td>{{ $b['stok'] }}</td>
                            <td>{{ $b['deskripsi'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h4 class="mb-3">Testimoni Pelanggan</h4>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimoni as $k => $t)
                    <div class="carousel-item {{ $k == 0 ? 'active' : '' }}">
                        <div class="testimoni-card">
                            <p class="fst-italic">"{{ $t['pesan'] }}"</p>
                            <small>- {{ $t['nama'] }}</small>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
