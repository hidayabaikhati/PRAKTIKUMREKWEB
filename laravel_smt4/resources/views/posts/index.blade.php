@extends('layouts.app')

@section('title', '📝 Daftar Postingan')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: url('{{ asset('images/pink.jpeg') }}') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .container-post {
        max-width: 1000px;
        margin: 60px auto;
        background: white;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(255, 105, 180, 0.2);
        padding: 30px 40px;
        border: 1px solid #f7cde3;
    }

    h1 {
        color: #d63384;
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 8px;
    }

    p.subtitle {
        text-align: center;
        color: #666;
        margin-bottom: 25px;
        font-size: 15px;
    }

    .btn-add {
        background-color: #ff69b4;
        color: white;
        padding: 10px 18px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        float: right;
        transition: 0.3s;
    }

    .btn-add:hover {
        background-color: #ff85c1;
        transform: scale(1.05);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 25px;
        border: 1px solid #f5c0d5;
    }

    th {
        background-color: #ffe4ec;
        color: #d63384;
        font-weight: 600;
        padding: 10px;
        border: 1px solid #f5c0d5;
        text-align: center;
    }

    td {
        border: 1px solid #f5c0d5;
        padding: 10px;
        text-align: center;
        color: #444;
        font-size: 14px;
    }

    tr:hover td {
        background-color: #fff6fa;
        transition: 0.2s;
    }

    .btn-edit {
        background-color: #ffe066;
        color: #333;
        padding: 5px 12px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        margin-right: 4px;
    }

    .btn-edit:hover {
        background-color: #ffed99;
    }

    .btn-delete {
        background-color: #ff6b6b;
        color: white;
        padding: 5px 12px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        border: none;
    }

    .btn-delete:hover {
        background-color: #ff8787;
        cursor: pointer;
    }

    .no-post {
        text-align: center;
        padding: 20px;
        color: #888;
        font-style: italic;
    }

</style>

<div class="container-post">
    <h1>📝 Daftar Postingan</h1>
    <p class="subtitle">Selamat datang di halaman postingan Laravel milik <b class="text-pink-600">Hidaya 🌸</b></p>

    <a href="{{ route('post.create') }}" class="btn-add">+ Tambah Postingan</a>

    <div style="clear: both;"></div>

    @if(session('success'))
        <div class="mt-3 mb-3 p-3 bg-pink-100 border border-pink-300 text-pink-700 rounded-md text-center">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $index => $post)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 60) }}</td>
                    <td>{{ $post->category->name ?? '-' }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn-edit">✏️ Edit</a>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin menghapus postingan ini?')">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="no-post">Belum ada postingan 💭</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
