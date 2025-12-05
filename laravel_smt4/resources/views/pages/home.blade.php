@extends('layouts.app')

@section('content')
<style>
    .home-bg {
        background: url("{{ asset('images/pink.jpeg') }}") no-repeat center center fixed;
        background-size: cover;
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0;
    }
    .profile-card {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        text-align: center;
        padding: 40px 30px;
        max-width: 400px;
        border: 2px solid rgba(255, 192, 203, 0.5);
        animation: fadeIn 1s ease;
    }
    .profile-card img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid #ffb3d9;
        margin-bottom: 15px;
        box-shadow: 0 0 15px rgba(255,182,193,0.5);
    }
    .profile-card h1 {
        color: #d63384;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .profile-card p {
        margin: 5px 0;
        font-size: 16px;
    }
    .highlight {
        background-color: #ffe4ec;
        display: inline-block;
        padding: 6px 15px;
        border-radius: 20px;
        margin-top: 10px;
        color: #d63384;
        font-weight: 500;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="home-bg">
    <div class="profile-card">
        <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo">
        <h1>🌸 Selamat Datang, {{ Auth::user()->name ?? 'Hidaya' }}!</h1>
        <p><strong>Nama:</strong> Nur Hidayatus Sholekhah</p>
        <p><strong>NIM:</strong> G211230030</p>
        <div class="highlight">🌸 Mahasiswa Informatika 🌸</div>
        <hr style="border-color:#ffb6c1; margin:20px 0;">
        <p>Senang bertemu lagi! Selamat datang di web Laravel-ku 🌷</p>
    </div>
</div>
@endsection
