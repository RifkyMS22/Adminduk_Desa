@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita</h1>
</div>

<div class="btn-group">
    <a href="{{ route('dashboard.berita.create') }}" class="btn btn-primary active" aria-current="page">Tambah</a>
</div>

<div class="table-responsive small">
    <table class="table table-striped table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $berita)
            <tr>
                <td width="200">{{ $berita->judul }}</td>
                <td>{{ $berita->isi }}</td>
                <td>
                    <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" style="width: auto ; height:100px" alt="{{ $berita->judul }}">


                </td>
                <td width="100">
                    {{-- <a href="{{ url('/dashboard/administrasi/' . $berita->id . '/edit') }}" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ url('/dashboard/administrasi/' . $berita->id) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $berita->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="{{ url('/dashboard/administrasi/berita/export/' . $berita->id) }}" class="badge bg-primary" target="_blank">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $berita->id }}" action="{{ url('/dashboard/administrasi/' . $berita->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form> --}}
                </td>
            </tr>
            @endforeach
            <script>
                feather.replace()
            </script>
        </tbody>
    </table>
</div>


{{-- <section>
    <div class="page-section text-black mb-3 mt-7" id="berita">
        <div class="container">
            <h2 class="page-section-heading text-center  mb-3">BERITA</h2>
            <div class="row">
                @foreach($berita as $berita)
                    <div class="col-4">
                        <div class="card">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->isi }}</p>
                                <a href="/berita/{{ $berita->id }}" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}


@endsection