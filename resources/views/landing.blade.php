@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<section class="hero py-5 mt-n4">
    <div class="container py-4 text-center">
        <h1 class="fw-bold display-5">Kenali Kesehatan Keuangan Bulananmu</h1>
        <p class="lead mb-4">
            Analisis pemasukan dan pengeluaran dengan metode Fuzzy Sugeno, lalu dapatkan
            rekomendasi alokasi anggaran bulan depan.
        </p>
        @guest
            <a href="{{ route('register') }}" class="btn btn-light btn-lg me-2">Mulai Sekarang</a>
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">Masuk</a>
        @else
            <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('dashboard') }}"
               class="btn btn-light btn-lg">Buka Dashboard</a>
        @endguest
    </div>
</section>

<section class="container py-5">
    <h2 class="h4 text-forest text-center mb-4">Cara Kerja</h2>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card h-100"><div class="card-body">
                <h3 class="h5">1. Isi Data</h3>
                <p class="mb-0">Masukkan pemasukan, pengeluaran pokok, gaya hidup, dan tabungan bulananmu.</p>
            </div></div>
        </div>
        <div class="col-md-4">
            <div class="card h-100"><div class="card-body">
                <h3 class="h5">2. Analisis</h3>
                <p class="mb-0">Sistem menghitung rasio dan memprosesnya dengan 27 aturan fuzzy.</p>
            </div></div>
        </div>
        <div class="col-md-4">
            <div class="card h-100"><div class="card-body">
                <h3 class="h5">3. Rekomendasi</h3>
                <p class="mb-0">Lihat skor, kategori, serta persentase dan nominal alokasi anggaran.</p>
            </div></div>
        </div>
    </div>
</section>
@endsection