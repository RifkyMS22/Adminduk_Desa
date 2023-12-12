@extends('layouts.app')

@section('container')
<br>
<section>
    <div class="page-section text-black mb-3 mt-7" id="berita">
        <div class="container">
            <h2 class="page-section-heading text-center mb-3">BERITA</h2>
            <div class="row">
                @foreach($berita as $berita)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}" style="max-height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ Str::limit($berita->isi, 100) }}</p>
                                <a href="{{ route('berita.show', ['id' => $berita->id]) }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
