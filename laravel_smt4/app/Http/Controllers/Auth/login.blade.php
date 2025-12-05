@extends('layouts.app')

@section('content')
<div style="text-align:center; padding-top: 80px; background-color:#ffe6ef;">
    <h2>🔑 Login ke Hidaya Web</h2>

    @if ($errors->any())
        <div style="color:red;">
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" style="margin-top: 20px;">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required style="padding:8px; margin:5px;"><br>
        <input type="password" name="password" placeholder="Password" required style="padding:8px; margin:5px;"><br>
        <button type="submit" style="padding:8px 16px; background:#f48fb1; border:none; border-radius:5px; color:white;">Login</button>
    </form>

    <p style="margin-top:15px;">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
</div>
@endsection
