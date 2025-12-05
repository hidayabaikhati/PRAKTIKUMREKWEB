<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌸 Hidaya Web - @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: url('{{ asset("images/pink.jpeg") }}') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        nav {
            background-color: rgba(255, 255, 255, 0.95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .logo span {
            font-weight: bold;
            font-size: 22px;
            background: linear-gradient(90deg, #ff5ca2, #d63384, #6f42c1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .menu {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .menu a, .menu form button {
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            padding: 6px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .menu a {
            color: #555;
        }

        .menu a:hover {
            color: #d63384;
            transform: scale(1.1);
        }

        .menu form button {
            background-color: #d63384;
            color: white;
            border: none;
            cursor: pointer;
        }

        .menu form button:hover {
            background-color: #ff5ca2;
            transform: scale(1.05);
        }

        .hamburger {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 10px;
            padding: 10px 20px;
        }

        .mobile-menu a, .mobile-menu form button {
            text-align: left;
        }

        @media (max-width: 640px) {
            .menu { display: none; }
            .hamburger { display: block; }
            .mobile-menu { display: flex; }
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        .logo-main {
            width: 100px;
            border-radius: 50%;
            box-shadow: 0 0 10px #ffb6c1;
        }

        h1 { color: #d63384; margin: 10px 0; }
        p { font-size: 16px; color: #444; }

        .id-card {
            background-color: rgba(255,255,255,0.85);
            border-radius: 20px;
            width: 320px;
            margin: 50px auto;
            padding: 20px;
            text-align: left;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            font-size: 16px;
            color: #333;
        }

        .id-card h3 {
            text-align: center;
            color: #d63384;
        }

        .id-card strong { color: #555; }
        .id-card p { margin: 5px 0; }
    </style>
</head>
<body>
    <!-- NAVIGATION -->
    <nav x-data="{ open: false }">
        <div class="logo">
            <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Hidaya">
            <span>🌸 Hidaya Web</span>
        </div>

        <div class="menu">
            <a href="{{ route('home') }}">🏠 Home</a>
            <a href="{{ route('about') }}">ℹ️ About</a>
            <a href="{{ route('post.index') }}">📝 Post</a>
            <a href="{{ route('mahasiswa.index') }}">🎓 Mahasiswa</a>
            <a href="{{ route('contact') }}">💌 Contact</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">🚪 Logout</button>
            </form>
        </div>

        <button @click="open = ! open" class="hamburger sm:hidden">☰</button>

        <div x-show="open" class="mobile-menu sm:hidden">
            <a href="{{ route('home') }}">🏠 Home</a>
            <a href="{{ route('about') }}">ℹ️ About</a>
            <a href="{{ route('post.index') }}">📝 Post</a>
            <a href="{{ route('mahasiswa.index') }}">🎓 Mahasiswa</a>
            <a href="{{ route('contact') }}">💌 Contact</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">🚪 Logout</button>
            </form>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
