@extends('layouts.app')

@section('title', '🌸 Tentang Kami | Hidaya_Davier')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, rgba(255,192,203,0.7), rgba(255,182,193,0.6)),
                url('{{ asset('images/pink.jpeg') }}') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    min-height: 100vh;
}

/* 🌸 Container Utama */
.container-about {
    max-width: 1100px;
    margin: 80px auto;
    padding: 50px 40px;
    background: rgba(255, 255, 255, 0.35);
    backdrop-filter: blur(25px);
    border-radius: 25px;
    box-shadow: 0 15px 45px rgba(255,105,180,0.35);
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

h1 {
    font-weight: 800;
    font-size: 3rem;
    background: linear-gradient(90deg, #ff69b4, #ff85a1, #ffb6c1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 1rem;
    text-shadow: 0 0 15px rgba(255,182,193,0.4);
}

.separator {
    width: 130px;
    height: 5px;
    background: linear-gradient(90deg, #ff6fae, #ff91bf, #ffcce0);
    border-radius: 12px;
    margin: 0 auto 2rem auto;
}

/* 🌷 CARD GRID */
.cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 25px;
    margin-top: 30px;
}

.card {
    background: rgba(255,255,255,0.95);
    border-radius: 22px;
    box-shadow: 0 10px 25px rgba(255,105,180,0.3);
    padding: 30px 25px;
    text-align: center;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(255,105,180,0.45);
}
.card i {
    font-size: 2.5rem;
    color: #ff69b4;
    margin-bottom: 15px;
}
.card h5 {
    color: #d63384;
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 10px;
}
.card p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* 💕 Profil Card */
.profile-card {
    margin-top: 60px;
    background: rgba(255,255,255,0.9);
    border-radius: 25px;
    padding: 35px 40px;
    box-shadow: 0 10px 30px rgba(255,105,180,0.4);
    display: inline-block;
}
.profile-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid #ffb6c1;
    margin-bottom: 15px;
}
.profile-card h5 {
    color: #d63384;
    font-weight: 700;
}
.profile-card p {
    color: #666;
    font-size: 0.95rem;
}

/* ✨ Animasi */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
}

/* 📱 Responsif */
@media (max-width: 768px) {
    .card { padding: 25px 20px; }
}
</style>

<div class="container-about">
    <h1>Tentang Kami 🌸</h1>
    <div class="separator"></div>

    <p class="lead" style="font-size:1.15rem; color:#4b4b4b; line-height:1.8; text-align:justify;">
        Selamat datang di aplikasi praktikum <strong>Laravel 12</strong>!  
        Kami belajar membangun website modern menggunakan <strong>Blade</strong>, <strong>Controller</strong>,
        <strong>Routing</strong>, dan <strong>Eloquent ORM</strong>.  
        Desain halaman ini mencerminkan semangat belajar, keindahan kode, dan kesabaran menghadapi error 💕
    </p>

    {{-- 🌷 Kartu Inspiratif --}}
    <div class="cards-container">
        <div class="card">
            <i class="bi bi-brush"></i>
            <h5>Desain & Estetika</h5>
            <p>Warna pastel lembut dan elemen visual harmonis menghadirkan nuansa menenangkan, menggambarkan keindahan dalam kesederhanaan 🌷.</p>
        </div>

        <div class="card">
            <i class="bi bi-code-slash"></i>
            <h5>Kreativitas dalam Coding</h5>
            <p><strong>Hidaya said:</strong> “Coding adalah seni —  
            setiap baris kode bercerita, setiap bug memberi makna.” 🎨</p>
        </div>

        <div class="card">
            <i class="bi bi-heart-pulse"></i>
            <h5>Semangat Belajar</h5>
            <p>Dalam setiap error tersimpan pelajaran, dalam setiap commit ada perkembangan.  
               Belajar itu perjalanan, bukan perlombaan 💪.</p>
        </div>

        <div class="card">
            <i class="bi bi-lightbulb"></i>
            <h5>Inovasi & Ide</h5>
            <p>Kami percaya setiap ide, sekecil apapun, bisa menjadi awal dari sesuatu yang besar — asal diberi kesempatan untuk tumbuh 💡.</p>
        </div>

        <div class="card">
            <i class="bi bi-gear-fill"></i>
            <h5>Problem Solving</h5>
            <p>“Bug bukan musuh, melainkan guru kecil yang mengajarkan kesabaran.”  
               Debugging adalah bagian penting dari proses kreatif 🛠️.</p>
        </div>

        <div class="card">
            <i class="bi bi-emoji-smile"></i>
            <h5>Komunitas & Kolaborasi</h5>
            <p>Kami tumbuh bersama, berbagi ilmu, dan saling membantu.  
               Dunia coding bukan hanya logika — tapi juga empati dan kebersamaan 🤝.</p>
        </div>
    </div>

    {{-- 💖 Profil Hidaya --}}
    <div class="profile-card mt-5">
        <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Foto Hidaya">
        <h5>Nur Hidayatus Sholekhah</h5>
        <p><i class="bi bi-card-list"></i> NIM: G.211.23.0030</p>
        <p><i class="bi bi-mortarboard-fill"></i> Praktikum Laravel 12</p>
        <p><i class="bi bi-chat-heart"></i> Motto: “Jangan takut error — karena dari error kita belajar menjadi elegan.”</p>
    </div>

    
</div>
@endsection
