@extends('layouts.app')

@section('container')
<br>
<section>
    <div class="page-section text-black mb-3 mt-7" id="berita">
        <div class="container">
            <h2 class="page-section-heading text-center mb-3">{{ $berita->judul }}</h2>
            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" class="mx-auto d-block" style="width: 300px; height: auto;" alt="{{ $berita->judul }}">
            <p class="text-muted">{{ $berita->created_at->format('d F Y') }}</p>
            <p>{{ $berita->isi }}</p>
            <a href="/" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</section>
@endsection
