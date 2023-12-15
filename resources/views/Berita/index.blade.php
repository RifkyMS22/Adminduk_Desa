@extends('layouts.app')

@section('container')
<br>
<section>
    <div class="page-section text-black mb-3 mt-7" id="berita">
        <div class="container">
            <h2 class="page-section-heading text-center mb-3">BERITA</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($berita as $berita)
                    <div class="mb-4">
                        <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md">
                            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" class="w-full h-48 object-cover" alt="{{ $berita->judul }}">
                            <div class="p-4">
                                <h5 class="text-xl font-bold mb-2">{{ $berita->judul }}</h5>
                                <p class="text-gray-700">{{ Str::limit($berita->isi, 100) }}</p>
                                <a href="{{ route('berita.show', ['id' => $berita->id]) }}" class="mt-2 block bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
