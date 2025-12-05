<h2>Hasil Submit Form</h2>
<p>{{ $message }}</p>
<p>Nama: {{ $name }}</p>
<p>Email: {{ $email }}</p>

@if($photoPath)
    <p>Foto: <img src="{{ asset('storage/'.$photoPath) }}" width="100"></p>
@endif

<p>Cookie: {{ $cookieName }}</p>

<h3>Data Lengkap dari Request:</h3>
<pre>{{ print_r($allData, true) }}</pre>

<a href="{{ route('form.show') }}">Kembali ke Form</a>
