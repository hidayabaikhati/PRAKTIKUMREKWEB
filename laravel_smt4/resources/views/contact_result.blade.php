@extends('layouts.app')

@section('content')
<div class="result-container">
    <h2>💌 Pesan Berhasil Dikirim!</h2>
    <p>Terima kasih, {{ $data['name'] }} 🌸</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Pesan Kamu:</p>
    <blockquote>{{ $data['message'] }}</blockquote>

    <a href="{{ route('contact') }}" class="btn-back">⬅️ Kembali ke Halaman Contact</a>
</div>

<style>
.result-container {
    background-color: #ffe6f2;
    padding: 30px;
    border-radius: 25px;
    text-align: center;
}

.btn-back {
    display: inline-block;
    margin-top: 20px;
    background: #ffb6c1;
    padding: 10px 20px;
    border-radius: 10px;
    color: white;
    text-decoration: none;
}
</style>
@endsection
