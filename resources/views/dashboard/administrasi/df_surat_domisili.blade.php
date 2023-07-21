@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Surat Keterangan Domisili</h1>
</div>
<div class="btn-group">
    <a href="{{ route('dashboard.administrasi.create_domisili') }}" class="btn btn-primary active" aria-current="page">Tambah</a>
</div>
<div class="table-responsive small">
    <table class="table table-striped table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NIK</th>
                <th scope="col">No KK</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Tempat, tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Warganegara</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">No Surat</th>
                <th scope="col">Keperluan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domisili as $domisili)
            <tr>
                <td width="200">{{ $domisili->nama }}</td>
                <td>{{ $domisili->nik }}</td>
                <td>{{ $domisili->no_kk }}</td>
                <td>{{ $domisili->binti }}</td>
                <td width="170">{{ $domisili->tmpt_tgl_lahir }}</td>
                <td>{{ $domisili->agama }}</td>
                <td>{{ $domisili->jenis_kelamin }}</td>
                <td>{{ $domisili->warganegara }}</td>
                <td>{{ $domisili->alamat }}</td>
                <td>{{ $domisili->pekerjaan }}</td>
                <td>{{ $domisili->no_surat }}</td>
                <td>{{ $domisili->keperluan }}</td>
                <td width="100">
                    <a href="{{ route('dashboard.administrasi.edit', ['domisili' => $domisili->id]) }}" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ route('dashboard.administrasi.destroy', ['domisili' => $domisili->id]) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $domisili->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="" class="badge bg-primary" target="_blank">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $domisili->id }}" action="{{ route('dashboard.administrasi.destroy', ['domisili' => $domisili->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
            <script>
                feather.replace()
            </script>
        </tbody>
    </table>
</div>
@endsection
