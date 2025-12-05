@extends('layouts.app')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <!-- input email & password -->
</form>

@section('title', 'Register | 🌸 Hidaya_Davier')

@section('content')
<div class="auth-page">
    <div class="auth-box">
        <div class="logo-section">
            <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Hidaya">
            <h1>🌸 Hidaya_Davier</h1>
        </div>

        <h2>📝 Register</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Nama lengkap" required value="{{ old('name') }}">
            <input type="email" name="email" placeholder="Email aktif" required value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            <button type="submit" class="btn-submit">🌸 Daftar</button>
        </form>

        <p class="register-link">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
    </div>
</div>

<style>
/* Sama seperti login.blade.php */
body {
    background: url('{{ asset('images/bg/pink.jpeg') }}') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    margin: 0;
}

.auth-page {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.auth-box {
    background: rgba(255, 255, 255, 0.9);
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(255,105,180,0.4);
    width: 400px;
    text-align: center;
}

.logo-section img {
    width: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.logo-section h1 {
    color: #ff69b4;
    margin-bottom: 25px;
}

.auth-box h2 {
    color: #ff4fa1;
    margin-bottom: 20px;
}

.auth-box input {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border-radius: 12px;
    border: 1px solid #ffc0cb;
    font-size: 1rem;
}

.btn-submit {
    width: 100%;
    padding: 12px;
    background: linear-gradient(45deg,#ff69b4,#ff85c1);
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-submit:hover {
    transform: scale(1.03);
    background: linear-gradient(45deg,#ff85c1,#ff69b4);
}

.register-link {
    margin-top: 15px;
    font-weight: 500;
}

.register-link a {
    color: #ff69b4;
    font-weight: bold;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    padding: 10px 15px;
    border-radius: 10px;
    margin-bottom: 15px;
    text-align: left;
}
</style>
@endsection
