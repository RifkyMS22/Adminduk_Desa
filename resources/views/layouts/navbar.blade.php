<!-- Navbar Desktop -->
<nav class="bg-gray-800 p-4 hidden lg:flex">
    <div class="container mx-auto flex items-center justify-between">
        <a class="text-white text-lg font-bold" href="#">Adminduk Palar</a>
        <div class="flex items-center space-x-4">
            <a class="text-white" href="/">Home</a>
            <a class="text-white" href="/layanan/index">Layanan</a>
            <a class="text-white" href="/semua-berita">Berita</a>
            <a class="text-white" href="/profile">Profil</a>
            @if($isAdmin)
                <a class="text-white" href="/dashboard-index">Dashboard</a>
            @endif

            <div x-data="{ isOpen: false }">
                @guest
                    <!-- Tampilkan tombol login dan registrasi jika pengguna belum login -->
                    <a class="text-white" href="/halaman_login">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                @else
                    <!-- Tampilkan dropdown jika pengguna sudah login -->
                    <div class="relative inline-block text-left">
                        <span @click="isOpen = !isOpen" class="cursor-pointer text-white">
                            Hello, {{ Auth::user()->name }}
                            <i class="fas fa-chevron-down"></i>
                        </span>
            
                        <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-50 mt-2 bg-gray-800 rounded-md shadow-lg text-white">
                            <form action="{{ route('logout') }}" method="post" class="block px-4 py-2">
                                @csrf
                                <button type="submit">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
            
        </div>
    </div>
</nav>

<!-- Navbar Responsif -->
<div x-data="{ isOpen: false }" class="lg:hidden">
    <div class="bg-gray-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a class="text-white text-lg font-bold" href="#">Adminduk Palar</a>
            <button @click="isOpen = !isOpen" class="text-white focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <div x-show="isOpen" @click.away="isOpen = false" class="bg-gray-800 px-2 pt-2 pb-3 space-y-1">
        <a class="block text-white" href="/">Home</a>
        <a class="block text-white" href="/layanan/index">Layanan</a>
        <a class="block text-white" href="/semua-berita">Berita</a>
        <a class="block text-white" href="/profile">Profil</a>
        <a class="block text-white" href="/dashboard-index">Dashboard</a>

        <div x-data="{ isOpen: false }">
            @guest
                <!-- Tampilkan tombol login dan registrasi jika pengguna belum login -->
                <a class="text-white" href="/halaman_login">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            @else
                <!-- Tampilkan dropdown jika pengguna sudah login -->
                <div class="relative inline-block text-left">
                    <span @click="isOpen = !isOpen" class="cursor-pointer text-white">
                        Hello, {{ Auth::user()->name }}
                        <i class="fas fa-chevron-down"></i>
                    </span>
        
                    <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-50 mt-2 bg-gray-800 rounded-md shadow-lg text-white">
                        <form action="{{ route('logout') }}" method="post" class="block px-4 py-2">
                            @csrf
                            <button type="submit">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endguest
        </div>

    </div>
</div>
