@extends('layouts.app')

@section('container')
<br>
<!-- Home -->
<section class="page-section text-center mt-2 mb-5" id="home">
    <div class="container mx-auto mt-1 text-center">
        <h1 class="text-uppercase font-bold mt-2 mb-0">Selamat Datang Di website</h1>
        <img class="mx-auto mt-4 mb-4" src="/img/logo_klaten.png" width="200" alt="..." />
        <h2 class="masthead-heading font-bold text-uppercase mb-1">Pemerintah Desa Palar</h2>
        <p class="masthead-subheading font-bold font-weight-light mb-4">Desa Palar - Kecamatan Trucuk - Kabupaten Klaten - Provinsi Jawa Tengah</p>
    </div>
    
    <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <h2 class="text-2xl font-bold mb-4">Layanan Kami</h2> <!-- Judul Layanan -->
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

</section>
<!-- Akhir Home -->
@endsection
