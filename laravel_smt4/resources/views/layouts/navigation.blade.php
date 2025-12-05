<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Hidaya" class="h-10 w-10 rounded-full shadow-sm">
                    <span class="font-extrabold text-2xl bg-clip-text text-transparent
                          bg-gradient-to-r from-pink-500 via-purple-400 to-indigo-500 drop-shadow-lg">
                        🌸 Hidaya Web
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex space-x-6 items-center">
                @auth
                    @php
                        $links = [
                            ['name' => '🏠 Home', 'route' => 'home'],
                            ['name' => 'ℹ️ About', 'route' => 'about'],
                            ['name' => '📝 Post', 'route' => 'post.index'],
                            ['name' => '🎓 Mahasiswa', 'route' => 'mahasiswa.index'],
                            ['name' => '💌 Contact', 'route' => 'contact'],
                        ];
                    @endphp

                    @foreach ($links as $link)
                        <a href="{{ route($link['route']) }}" 
                           class="font-semibold text-gray-800 hover:bg-gradient-to-r hover:from-pink-400 hover:via-purple-300 hover:to-indigo-400 
                                  hover:text-white px-3 py-2 rounded-md transition transform hover:scale-110">
                            {{ $link['name'] }}
                        </a>
                    @endforeach

                    <!-- Logout Desktop -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                            class="px-3 py-2 rounded-md font-semibold text-white bg-pink-500 hover:bg-pink-600 transition transform hover:scale-105">
                            🚪 Log Out
                        </button>
                    </form>
                @else
                    <!-- Guest Links -->
                    <a href="{{ route('login') }}" 
                       class="font-semibold text-white bg-purple-500 hover:bg-purple-600 px-3 py-2 rounded-md transition transform hover:scale-105">
                        🔑 Login
                    </a>
                    <a href="{{ route('register') }}" 
                       class="font-semibold text-white bg-indigo-500 hover:bg-indigo-600 px-3 py-2 rounded-md transition transform hover:scale-105">
                        📝 Register
                    </a>
                @endauth
            </div>

            <!-- Hamburger Mobile -->
            <div class="sm:hidden flex items-center">
                <button @click="open = ! open" class="p-2 rounded-md text-gray-600 hover:text-gray-800 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                @foreach ($links as $link)
                    <a href="{{ route($link['route']) }}" 
                       class="font-semibold text-gray-800 hover:text-pink-600 block px-4 py-2">
                        {{ $link['name'] }}
                    </a>
                @endforeach

                <!-- Logout Mobile -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                        class="w-full text-left px-4 py-2 text-white bg-pink-500 hover:bg-pink-600 font-semibold rounded-md">
                        🚪 Log Out
                    </button>
                </form>
            @else
                <!-- Guest Mobile Links -->
                <a href="{{ route('login') }}" 
                   class="font-semibold text-white bg-purple-500 hover:bg-purple-600 px-3 py-2 rounded-md block">
                    🔑 Login
                </a>
                <a href="{{ route('register') }}" 
                   class="font-semibold text-white bg-indigo-500 hover:bg-indigo-600 px-3 py-2 rounded-md block">
                    📝 Register
                </a>
            @endauth
        </div>
    </div>
</nav>
