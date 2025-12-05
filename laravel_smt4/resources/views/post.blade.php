@extends('layouts.app')

@section('title', '📝 Postingan')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold text-pink">📝 Daftar Postingan</h2>
    <p class="text-muted">Selamat datang di halaman postingan Laravel milik Hidaya 🌸</p>
</div>

<div class="card shadow-sm border-0 mb-3">
    <div class="card-body">
        <h5 class="card-title text-pink">Judul Postingan Pertama</h5>
        <p class="card-text">Ini adalah contoh isi postingan pertama di website Laravel kamu 💖.</p>
        <a href="#" class="btn btn-sm btn-outline-pink">Baca Selengkapnya</a>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <h5 class="card-title text-pink">Judul Postingan Kedua</h5>
        <p class="card-text">Kamu bisa menambahkan konten dinamis dari database nanti 🎀</p>
        <a href="#" class="btn btn-sm btn-outline-pink">Baca Selengkapnya</a>
    </div>
</div>

<style>
.text-pink { color: #d63384; }
.btn-outline-pink {
    color: #d63384;
    border-color: #d63384;
    transition: 0.3s;
}
.btn-outline-pink:hover {
    background-color: #d63384;
    color: white;
}
</style>
@endsection
