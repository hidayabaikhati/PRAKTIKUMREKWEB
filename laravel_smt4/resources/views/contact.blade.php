@extends('layouts.app')

@section('content')
<div class="contact-page">

    {{-- Logo dan Judul --}}
    <div class="logo-section">
        <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Pink">
        <h1>🌸 Hidaya_Davier</h1>
        <p class="subtitle">Hubungi kami dengan penuh kehangatan 💌</p>
    </div>

    {{-- Box Contact --}}
    <div class="contact-box">
        <h2>📞 Hubungi Kami</h2>
        <p>Silakan isi form di bawah ini untuk mengirimkan pesan atau saran 🌷</p>

        {{-- Pesan sukses --}}
        @if(session('success'))
            <div class="alert-success animate__animated animate__fadeInDown">
                {{ session('success') }}
            </div>
        @endif

        {{-- Form Contact --}}
        <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Masukkan nama kamu" required>
            <input type="email" name="email" placeholder="Masukkan email aktif" required>
            <textarea name="message" rows="4" placeholder="Tulis pesan kamu di sini..." required></textarea>
            <button type="submit" class="btn-submit">💌 Kirim Pesan</button>
        </form>

        {{-- Media Sosial --}}
        <div class="social-section">
            <h3>🌸 Media Sosial Kami</h3>
            <div class="social-icons">
                <a href="https://wa.me/62895320605478" target="_blank" title="WhatsApp">💬</a>
                <a href="https://instagram.com/yahidyaa" target="_blank" title="Instagram">📸</a>
                <a href="https://github.com/hidaya" target="_blank" title="GitHub">🐙</a>
                <a href="https://facebook.com" target="_blank" title="Facebook">📘</a>
                <a href="https://tiktok.com" target="_blank" title="TikTok">🎵</a>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer>
        🌷 © 2025 Hidaya_Davier | Dibuat oleh: <b>Hidayatus Sholekhah (G.211.23.0030)</b>
    </footer>
</div>

{{-- STYLE --}}
<style>
/* 🌸 Background Lembut dengan efek blur */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, rgba(255,182,193,0.6), rgba(255,192,203,0.8)),
                url('{{ asset('images/pink.jpeg') }}') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    color: #333;
}

/* 🌸 Halaman Utama */
.contact-page {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 60px 20px;
}

/* 🌸 Logo */
.logo-section {
    text-align: center;
    margin-bottom: 40px;
    animation: fadeIn 1.2s ease-in-out;
}
.logo-section img {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(255,182,193,0.6);
}
.logo-section h1 {
    color: #ff69b4;
    font-weight: 800;
    margin-top: 15px;
    text-shadow: 0 0 10px rgba(255,182,193,0.5);
}
.subtitle {
    color: #fff;
    background-color: rgba(255,105,180,0.5);
    display: inline-block;
    padding: 8px 18px;
    border-radius: 15px;
    margin-top: 8px;
}

/* 🌸 Kotak Contact */
.contact-box {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(18px);
    padding: 40px 35px;
    border-radius: 25px;
    box-shadow: 0 10px 40px rgba(255,105,180,0.3);
    max-width: 700px;
    width: 100%;
    text-align: center;
    animation: slideUp 1s ease-in-out;
}

/* 🌸 Input Form */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin: 12px 0;
    border-radius: 12px;
    border: 1px solid #ffb6c1;
    background-color: rgba(255,255,255,0.9);
    transition: all 0.3s ease;
}
.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: #ff69b4;
    box-shadow: 0 0 10px rgba(255,105,180,0.3);
}

/* 🌸 Tombol */
.btn-submit {
    background: linear-gradient(90deg,#ff85a1,#ff69b4);
    color: white;
    border: none;
    padding: 12px 35px;
    border-radius: 20px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(255,105,180,0.4);
}
.btn-submit:hover {
    transform: translateY(-3px);
    background: linear-gradient(90deg,#ff69b4,#ff85a1);
}

/* 🌸 Alert sukses */
.alert-success {
    background: rgba(255,255,255,0.9);
    border-left: 6px solid #4CAF50;
    color: #155724;
    padding: 14px;
    border-radius: 12px;
    margin-bottom: 20px;
    font-weight: bold;
}

/* 🌸 Ikon Sosmed */
.social-section {
    margin-top: 30px;
}
.social-section h3 {
    color: #ff69b4;
    margin-bottom: 15px;
    font-weight: 700;
}
.social-icons a {
    font-size: 2rem;
    margin: 0 12px;
    transition: transform 0.3s ease, color 0.3s ease;
    text-decoration: none;
}
.social-icons a:hover {
    transform: scale(1.2);
    color: #ff69b4;
}

/* 🌸 Footer */
footer {
    margin-top: 50px;
    color: white;
    background-color: rgba(255,105,180,0.5);
    padding: 10px 25px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(255,105,180,0.4);
    font-weight: bold;
}

/* 🌸 Animasi */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes slideUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

/* 🌸 Responsif */
@media (max-width: 768px) {
    .contact-box {
        padding: 25px;
    }
    .logo-section img {
        width: 100px;
        height: 100px;
    }
}
</style>
@endsection
