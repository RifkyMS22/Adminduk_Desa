<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="path/to/lightbox/css/lightbox.min.css">
    <!-- Menggunakan CDN untuk BaguetteBox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/baguettebox.js@1.11.0/dist/baguetteBox.min.css">
    <!-- Menggunakan CDN untuk BaguetteBox JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/baguettebox.js@1.11.0/dist/baguetteBox.min.js" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body class="bg-gray-100 font-family-karla flex flex-col lg:flex-row min-h-screen">
     <!-- Navbar untuk tampilan mobile -->
     <nav class="bg-gray-800 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 w-full lg:hidden">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <!-- Tombol untuk membuka/menutup sidebar -->
            <div class="p-2 text-center">
                <a href="/dashboard-index" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Adminduk</a>
            </div>            
            <div>
            <button id="mobileDropdown" class="flex items-center justify-end text-white text-3xl font-semibold uppercase hover:text-gray-300">
                <i class="fas fa-bars"></i>
            </button>
            </div>
            <!-- Konten navbar mobile -->
            <div id="mobileNavbar" class="mt-3 hidden">
                <nav class="text-white text-sm sm:text-base font-semibold pt-3">
                    <a href="/dashboard-index"
                        class="flex items-center {{ request()->is('dashboard-index') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                        <span>Dashboard</span>
                    </a>
                    <a href="/dashboard/penduduk"
                        class="flex items-center {{ request()->is('dashboard/penduduk*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                        <span>Data Penduduk</span>
                    </a>
                    <a href="/dashboard-administrasi"
                        class="flex items-center {{ request()->is('admin/administrasi-umum*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                        Administrasi Umum
                    </a>
                    <a href="/dashboard-adminiduk"
                        class="flex items-center {{ request()->is('admin/administrasi-kependudukan*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                        Administrasi Kependudukan
                    </a>
                    <a href="/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        Home
                    </a>
                    <a href="/dashboard/berita/index"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        Berita
                    </a>
                    <a href="/dashboard/pengaduan/index"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        Pengaduan
                    </a>
                    <a href="/dashboard/informasi/index"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        Informasi
                    </a>
                </nav>
            </div>
        </div>
    </nav>
    
    
        <aside class="relative bg-gray-800 h-100% w-64 hidden sm:block shadow-xl fixed overflow-y-auto-hidden">
            <div class="p-6">
                <a href="/dashboard-index"
                    class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Adminduk</a>
            </div>
            <nav class="text-white text-sm sm:text-base font-semibold pt-3 bg-gray-800 h-full">
                <a href="/dashboard-index"
                    class="flex items-center {{ request()->is('dashboard-index') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="hidden sm:inline">Dashboard</span>
                </a>
                <a href="/dashboard/penduduk"
                    class="flex items-center {{ request()->is('dashboard/penduduk*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                    <i class='fas fa-file-alt mr-3'></i>
                    <span class="hidden sm:inline">Data Penduduk</span>
                </a>
                <a href="/dashboard-administrasi"
                    class="flex items-center {{ request()->is('admin/administrasi-umum*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                    <i class='fas fa-file-alt mr-3'></i>
                    Administrasi Umum
                </a>
                <a href="/dashboard-adminiduk"
                    class="flex items-center {{ request()->is('admin/administrasi-kependudukan*') ? 'text-blue-500' : 'opacity-75 hover:opacity-100' }} py-4 pl-6 nav-item">
                    <i class='fas fa-file-alt mr-3'></i>
                    Administrasi Kependudukan
                </a>
                <a href="/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    Home
                </a>
                <a href="/dashboard/berita/index"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    Berita
                </a>
                <a href="/dashboard/pengaduan/index"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    Pengaduan
                </a>
                <a href="/dashboard/informasi/index"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    Informasi
                </a>
                <a href="/dashboard/pengajuan/index"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    Pengajuan
                </a>
            </nav>
        </aside>
   
        <main class="flex-grow lg:flex-1 p-6 overflow-y-auto">
            @yield('content')
        </main>
 

    <script>
        // JavaScript untuk menangani dropdown pada tampilan mobile
        const mobileDropdown = document.getElementById('mobileDropdown');
        const mobileNavbar = document.getElementById('mobileNavbar');

        mobileDropdown.addEventListener('click', () => {
            mobileNavbar.classList.toggle('hidden');
        });

        // Menutup dropdown jika di luar dropdown diklik
        window.addEventListener('click', (event) => {
            if (!mobileDropdown.contains(event.target) && !mobileNavbar.contains(event.target)) {
                mobileNavbar.classList.add('hidden');
            }
        });
    </script>
</body>

</html>

