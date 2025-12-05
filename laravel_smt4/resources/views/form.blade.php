@extends('layouts.app')

@section('title', '📝 Form Laravel 12')

@section('content')
<div class="container text-center mt-4">

    <h2 class="fw-bold text-pink mb-3">Form Laravel 12</h2>

    {{-- 🌸 Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success text-center mt-3" style="background:#d4edda;color:#155724;padding:10px;border-radius:10px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- 🌸 Tampilkan error validasi --}}
    @if($errors->any())
        <div class="alert alert-danger text-start mt-3" style="background:#f8d7da;color:#721c24;padding:10px;border-radius:10px;">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 🌸 Form --}}
    <form action="{{ route('form.submit') }}" method="POST" class="mx-auto text-start" style="max-width:500px;">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Nama kamu" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="contoh@email.com" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Age:</label>
            <input type="number" name="age" class="form-control" placeholder="Usia" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Active:</label><br>
            <label><input type="radio" name="active" value="1"> Yes</label>
            <label class="ms-3"><input type="radio" name="active" value="0"> No</label>
        </div>

        <div class="mb-3">
            <label class="form-label">Items:</label>
            <select name="items[]" multiple class="form-select">
                <option value="laptop">Laptop</option>
                <option value="buku">Buku</option>
                <option value="pena">Pena</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Birth Date:</label>
            <input type="date" name="birth" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status:</label>
            <select name="status" class="form-select" required>
                <option value="">-- Pilih Status --</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-pink w-100">Submit</button>
    </form>

    {{-- 🌸 Tampilkan hasil form --}}
    @if(session('data'))
        <div class="mt-4 p-3 border rounded bg-white shadow-sm text-start" style="max-width:500px;margin:auto;">
            <h5 class="text-pink">Data yang dikirim:</h5>
            <pre>{{ print_r(session('data'), true) }}</pre>
        </div>
    @endif

</div>

<style>
.text-pink { color: #e75480; }
.btn-pink {
    background-color: #e75480;
    color: white;
    border-radius: 10px;
    border: none;
    padding: 10px;
}
.btn-pink:hover { background-color: #d1426c; }
</style>
@endsection
