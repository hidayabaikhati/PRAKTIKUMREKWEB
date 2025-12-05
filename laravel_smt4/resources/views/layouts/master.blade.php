<!DOCTYPE html>
<html>
<head>
    <title>🌸 Hidaya_Davier - @yield('title')</title>
    <style>
        body {
            background: url('{{ asset('images/bg/pink.jpeg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background: rgba(255, 255, 255, 0.9);
            text-align: center;
            padding: 15px;
            box-shadow: 0 0 10px pink;
        }

        header h1 {
            margin: 0;
            color: deeppink;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: hotpink;
            margin: 0 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: deeppink;
        }

        main {
            text-align: center;
            padding: 40px;
        }

        footer {
            background: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 0 10px pink;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        <h1>🌸 Hidaya_Davier</h1>
        <nav>
            <a href="{{ url('/') }}">🏠 Home</a>
            <a href="{{ url('/posts') }}">📝 Posts</a>
            <a href="{{ url('/about') }}">💖 About</a>
            <a href="{{ url('/contact') }}">📞 Contact</a>
            <a href="{{ url('/mahasiswa') }}">🎓 Mahasiswa</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        🌷 © 2025 Hidaya_Davier | Dibuat oleh: <b>Hidayatus Sholekhah</b> (G.211.23.0030)
    </footer>

</body>
</html>
