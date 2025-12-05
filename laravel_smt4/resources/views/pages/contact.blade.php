@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="logo-section text-center">
        <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Pink">
        <h1>🌸 Hidaya_Davier</h1>
    </div>

    <h2>📞 Hubungi Kami</h2>
    <p>Silakan isi form di bawah ini atau hubungi kami melalui media sosial 🌸</p>

    @if (session('success'))
        <div style="background:#e8f5e9; color:#2e7d32; padding:10px; border-radius:8px; margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div>
            <label>Masukkan nama kamu</label>
            <input type="text" name="name" required class="form-control" placeholder="Nama lengkap">
        </div>

        <div>
            <label>Masukkan email aktif</label>
            <input type="email" name="email" required class="form-control" placeholder="Alamat email">
        </div>

        <div>
            <label>Tulis pesan kamu di sini...</label>
            <textarea name="message" rows="4" required class="form-control" placeholder="Pesan kamu..."></textarea>
        </div>

        <button type="submit" class="btn btn-pink">💌 Kirim Pesan</button>
    </form>
</div>
@endsection
