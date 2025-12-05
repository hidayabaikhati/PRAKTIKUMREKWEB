@extends('layouts.app')

@section('title', '🩷 Buat Postingan Baru')

@section('content')
<style>
    body {
        background: url('{{ asset('images/pink.jpeg') }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }
    .card-create {
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 40px;
        margin: 60px auto;
        width: 90%;
        max-width: 700px;
        box-shadow: 0 4px 30px rgba(255, 182, 193, 0.6);
    }
    h1 {
        color: #d63384;
        text-align: center;
        font-weight: bold;
        margin-bottom: 25px;
    }
    label {
        color: #7a1c4c;
        font-weight: 600;
    }
    input, textarea, select {
        width: 100%;
        border: 1.5px solid #f8a6c9;
        border-radius: 10px;
        padding: 10px;
        margin-top: 6px;
        margin-bottom: 15px;
        outline: none;
        transition: 0.3s;
    }
    input:focus, textarea:focus, select:focus {
        border-color: #d63384;
        box-shadow: 0 0 6px rgba(214, 51, 132, 0.4);
    }
    .btn-group {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
    }
    .btn-back, .btn-submit {
        border: none;
        border-radius: 12px;
        padding: 10px 25px;
        font-weight: 600;
        transition: 0.3s;
        cursor: pointer;
    }
    .btn-back {
        background-color: #ffd6e8;
        color: #c2185b;
    }
    .btn-back:hover {
        background-color: #f8a6c9;
        transform: scale(1.05);
    }
    .btn-submit {
        background-color: #e1bee7;
        color: #4a148c;
    }
    .btn-submit:hover {
        background-color: #ce93d8;
        transform: scale(1.05);
    }
</style>

<div class="card-create">
    <h1>🩷 Buat Postingan Baru</h1>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label>Judul</label>
        <input type="text" name="title" placeholder="Masukkan judul postingan" value="{{ old('title') }}">

        <label>Konten</label>
        <textarea name="content" rows="5" placeholder="Tulis konten di sini...">{{ old('content') }}</textarea>

        <label>Kategori</label>
        <select name="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <div class="btn-group">
            <a href="{{ route('post.index') }}" class="btn-back">🔙 Kembali</a>
            <button type="submit" class="btn-submit">✅ Tambah Postingan</button>
        </div>
    </form>
</div>
@endsection
