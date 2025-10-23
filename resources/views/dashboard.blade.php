@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="dashboard-container">
        <x-alert type="success" message="Mulailah menjelajahi bloomify, {{ $username }}!" />
        <div class="d-flex flex-wrap gap-4 mt-3">
            <div class="card-dashboard">
                <div class="mb-2"><i class="bi bi-people-fill"></i></div>
                <h5>Kelola Akun</h5>
                <p class="mb-3">Tambah, ubah, atau hapus akun pengguna</p>
                <button class="btn btn-sm">Soon</button>
            </div>
            <div class="card-dashboard">
                <div class="mb-2"><i class="bi bi-flower1"></i></div>
                <h5>Kelola Produk</h5>
                <p class="mb-3">Atur koleksi buket bunga</p>
                <a href="{{ route('pengelolaan') }}"><button class="btn btn-sm">Kelola</button></a>
            </div>

            <div class="card-dashboard">
                <div class="mb-2"><i class="bi bi-chat-dots-fill"></i></div>
                <h5>Testimoni</h5>
                <p class="mb-3">Pendapat pelanggan</p>
                <a href="{{ route('pengelolaan') }}"><button class="btn btn-sm">Kelola</button></a>
            </div>
        </div>
    </div>
@endsection
