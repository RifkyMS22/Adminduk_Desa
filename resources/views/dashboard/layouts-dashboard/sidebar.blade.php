<aside x-data="{ open: false }" class="relative bg-gray-800 h-screen w-64 hidden sm:block shadow-xl">
    <!-- Tombol untuk membuka/menutup sidebar -->
        <div class="p-6">
            <a href="/dashboard-index" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        </div>
        <nav class="text-white text-sm sm:text-base font-semibold pt-3">
            <a href="/dashboard-index" class="flex items-center {{ request()->is('dashboard-index') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                <span class="hidden sm:inline">Dashboard</span>
            </a>
            <a href="/dashboard/penduduk" class="flex items-center {{ request()->is('dashboard/penduduk*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class='fas fa-file-alt mr-3'></i>
                <span class="hidden sm:inline">Data Penduduk</span>
            </a>
            <a href="/dashboard-administrasi" class="flex items-center {{ request()->is('admin/administrasi-umum*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class='fas fa-file-alt mr-3'></i>
                Administrasi Umum
            </a>
            <a href="/dashboard-adminiduk" class="flex items-center {{ request()->is('admin/administrasi-kependudukan*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class='fas fa-file-alt mr-3'></i>
                Administrasi Kependudukan
            </a>
            <a href="/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" @click="isOpen = false">
                Home
            </a>
            <a href="/dashboard/berita/index" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" @click="isOpen = false">
                Berita
            </a>
            <a href="/dashboard/pengaduan/index" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" @click="isOpen = false">
                Pengaduan
            </a>
            <a href="/dashboard/informasi/index" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" @click="isOpen = false">
                Informasi
            </a>            
        </nav>
    </div>
</aside>

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-gray-800 py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
            <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
            </div>
        </div>
    </header>

    <!-- Mobile Header & Nav -->
    <header x-data="{ isOpen: false }" class="w-full bg-gray-800 py-5 px-6 sm:hidden">
        <div class="flex items-center justify-between">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
            <a href="/dashboard-index" class="flex items-center  text-white {{ request()->is('dashboard-index') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="/dashboard/penduduk" class="flex items-center  text-white {{ request()->is('dashboard/penduduk*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class='fas fa-file-alt mr-3'></i>
                Data Penduduk
            </a>
            <a href="#" class="flex items-center  text-white {{ request()->is('admin/administrasi-umum*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class='fas fa-file-alt mr-3'></i>
                Administrasi Umum
            </a>
            <a href="#" class="flex items-center  text-white {{ request()->is('admin/administrasi-kependudukan*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                <i class='fas fa-file-alt mr-3'></i>
                Administrasi Kependudukan
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-cogs mr-3"></i>
                Support
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-user mr-3"></i>
                My Account
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </a>
        </nav>
    </header>
    