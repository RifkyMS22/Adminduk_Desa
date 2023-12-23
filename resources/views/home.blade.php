@extends('layouts.app')

@section('container')
<br>
<!-- Home -->
<section class="page-section text-center mt-2 mb-5" id="home">
    <div class="container mx-auto mt-1 text-center">
        <h1 class="text-uppercase text-2xl font-bold mt-2 mb-0">Selamat Datang Di website</h1>
        <img class="mx-auto mt-4 mb-4" src="/img/logo_klaten.png" width="200" alt="..." />
        <h2 class="masthead-heading text-2xl font-bold text-uppercase mb-1">Pemerintah Desa Palar</h2>
        <p class="masthead-subheading font-weight-light mb-4">Desa Palar - Kecamatan Trucuk - Kabupaten Klaten - Provinsi Jawa Tengah</p>
    </div>
    
    <h2 class="text-2xl font-bold mb-2 mt-5">INFORMASI DESA PALAR</h2>
    <div class="container mx-auto mt-2 sm:w-3/4 md:w-1/2 lg:w-2/3 xl:w-1/2 border p-4 rounded-md bg-yellow-300">
        <div>
            @if($informasi->isEmpty())
                <p class="text-gray-500">Tidak ada informasi tersedia.</p>
            @else
                <ul>
                    @foreach($informasi as $info)
                        <li class="mb-4 border-b pb-4">
                            <h4 class="text-lg font-bold mb-2 text-blue-600">{{ $info->judul }}</h4>
                            <p class="text-green-800">{{ $info->deskripsi }}</p>
                            <p class="text-sm text-gray-500">Diposting pada {{ $info->created_at->format('d M Y') }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    
    
    
    

    <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <h2 class="text-2xl font-bold mt-5 mb-4">LAYANAN DESA PALAR</h2> <!-- Judul Layanan -->
        <!-- Carousel wrapper -->
        <div class="swiper-container relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 2 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 3 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 4 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 5 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 6 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 7 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
                <!-- Item 8 -->
                <div class="swiper-slide">
                    <a href="/tujuan/halaman1">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="/img/1.jpg" class="w-full h-full object-cover" alt="Gambar 1">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Tambahkan tombol navigasi jika diinginkan -->
            <div class="swiper-button-next flex items-center justify-center"></div>
            <div class="swiper-button-prev flex items-center justify-center"></div>
        </div>
    </div>
    
    <!-- Inisialisasi Swiper -->
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 4, // Tampilkan 4 gambar sekaligus
            spaceBetween: 15, // Spasi antar gambar
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    
    <!-- Berita Section -->
    <div class="container">
        <h2 class="text-center text-2xl font-bold mb-3">BERITA</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($berita as $item)
                <div class="mb-4">
                    <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md">
                        <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="w-full h-48 object-cover" alt="{{ $item->judul }}">
                        <div class="p-4">
                            <h5 class="text-xl font-bold mb-2">{{ $item->judul }}</h5>
                            <p class="text-gray-700">{{ Str::limit($item->isi, 100) }}</p>
                            <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="mt-2 block text-blue-500 hover:underline">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Tautan untuk melihat semua berita -->
        @if(count($berita) > 5)
            <div class="text-center mt-4">
                <a href="{{ route('semua-berita') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Semua Berita</a>
            </div>
        @endif
    </div>

    <!-- Akhir Berita -->
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 shadow-md rounded-md w-full sm:w-3/4 md:w-2/3 lg:w-1/2 xl:w-1/3">
            <h2 class="text-2xl font-bold mb-4">Formulir Pengaduan</h2>
    
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                @if(auth()->check())
                    <input type="hidden" id="nama" name="nama" value="{{ auth()->user()->name }}">
                    <input type="hidden" id="email" name="email" value="{{ auth()->user()->email }}">
                @endif
    
                <div class="mb-4">
                    <label for="pengaduan" class="block text-sm font-medium text-gray-600">Isi Pengaduan</label>
                    <textarea id="pengaduan" name="pengaduan" rows="4" class="mt-1 p-2 w-full border rounded-md" required></textarea>
                </div>
    
                <div class="mb-4">
                    <label for="gambar" class="block text-sm font-medium text-gray-600">Unggah Foto/Video</label>
                    <input type="file" id="gambar" name="gambar" accept="image/jpeg, image/png, image/gif" class="mt-1 p-2 w-full border rounded-md">
                </div>
    
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Kirim Pengaduan</button>
            </form>
        </div>
    </div>
    
    
    
    
    
</section>
<!-- Akhir Home -->
@endsection
