@extends('layouts.app')

@section('content')

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* ===== BACKGROUND ===== */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, rgba(255,192,203,0.6), rgba(255,105,180,0.5)),
                url('{{ asset('images/pink.jpeg') }}') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
}

/* ===== CONTAINER UTAMA ===== */
.container-about {
    max-width: 950px;
    margin: 80px auto;
    padding: 50px 40px;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(20px);
    border-radius: 25px;
    box-shadow: 0 15px 45px rgba(255,105,180,0.3);
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

/* ===== JUDUL ===== */
h1 {
    font-weight: 800;
    font-size: 3rem;
    background: linear-gradient(90deg, #ff69b4, #ff85a1, #ffb6c1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 1rem;
    text-shadow: 0 0 10px rgba(255,182,193,0.3);
}

/* ===== SEPARATOR ===== */
.separator {
    width: 120px;
    height: 4px;
    background: linear-gradient(90deg, #ff85a1, #ffb6c1, #ff69b4);
    border-radius: 10px;
    margin: 0 auto 2rem auto;
}

/* ===== PARAGRAF DENGAN IKON ===== */
p.lead {
    font-size: 1.2rem;
    color: #4b4b4b;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    text-align: justify;
}
p.lead i {
    color: #ff69b4;
    margin-right: 8px;
    font-size: 1.3rem;
    vertical-align: middle;
}

/* ===== CARD PROFIL ===== */
.profile-card {
    display: inline-block;
    background: rgba(255,255,255,0.85);
    border-radius: 25px;
    padding: 30px 35px;
    margin-top: 30px;
    box-shadow: 0 12px 35px rgba(255,105,180,0.4);
    transition: all 0.4s ease;
    animation: floatUp 1.2s ease-in-out;
}
.profile-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 18px 45px rgba(255,105,180,0.5);
}
.profile-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 3px solid #ffb6c1;
    margin-bottom: 15px;
    box-shadow: 0 0 25px rgba(255,182,193,0.6);
}
.profile-card h5 {
    color: #ff69b4;
    font-weight: 700;
    font-size: 1.3rem;
}
.profile-card p {
    color: #555;
    margin: 5px 0;
}

/* ===== ANIMASI ===== */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes floatUp {
    0% { transform: translateY(30px); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .container-about {
        padding: 30px 20px;
        margin: 40px 15px;
    }
    h1 { font-size: 2rem; }
    p.lead { font-size: 1rem; }
    .profile-card img { width: 100px; height: 100px; }
}
</style>

<div class="container-about animate-fade">
    <h1>Tentang Kami 🌸</h1>
    <div class="separator"></div>

    <p class="lead">
        <i class="bi bi-lightning-charge-fill"></i>Selamat datang di aplikasi praktikum <strong>Laravel 12</strong>!  
        Kami belajar membangun website modern menggunakan <strong>Blade</strong>, <strong>Controller</strong>, 
        <strong>Routing</strong>, dan <strong>Eloquent ORM</strong>.  
        Aplikasi ini dirancang dengan fokus pada UI/UX yang menarik, animasi interaktif, dan struktur kode profesional ✨
    </p>

    <p class="lead">
        <i class="bi bi-brush-fill"></i>Selain itu, proyek ini menggunakan <strong>Bootstrap</strong> untuk desain responsif, 
        warna lembut bernuansa <em>pink pastel</em>, serta efek visual yang membuat setiap halaman tampak hidup 💻🌷. 
        Semua ini bertujuan mengasah kreativitas dan pemahaman mendalam tentang pengembangan web modern.
    </p>

    <div class="profile-card">
        <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Foto Hidaya">
        <h5>Nur Hidayatus Sholekhah</h5>
        <p><i class="bi bi-card-list text-pink me-2"></i> NIM: G.211.23.0030</p>
        <p><i class="bi bi-mortarboard-fill text-pink me-2"></i> Praktikum Laravel 12</p>
    </div>
</div>

@endsection
