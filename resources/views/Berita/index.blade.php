@extends('layouts.app')

@section('container')
<br>
<section>
    <div class="page-section text-black mb-3 mt-7" id="berita">
        <div class="container">
            <h2 class="page-section-heading text-center  mb-3">BERITA</h2>
            <div class="row">
                @foreach($berita as $berita)
                    <div class="col-4">
                        <div class="card">
                            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}"  alt="{{ $berita->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->isi }}</p>
                                <a href="/berita/{{ $berita->id }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection