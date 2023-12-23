@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl">Berita</h1>
</div>

<div class="flex">
    <a href="{{ route('dashboard.berita.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded inline-block">Tambah</a>
</div>

<div class="overflow-x-auto">
    <table class="table-auto min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border">Judul</th>
                <th class="py-2 px-4 border">Isi</th>
                <th class="py-2 px-4 border">Gambar</th>
                <th class="py-2 px-4 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $berita)
            <tr>
                <td class="py-2 px-4 border">{{ $berita->judul }}</td>
                <td class="py-2 px-4 border">{{ $berita->isi }}</td>
                <td class="py-2 px-4 border">
                    <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" class="w-auto h-20" alt="{{ $berita->judul }}">
                </td>
                <td class="py-2 px-4 border">
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
