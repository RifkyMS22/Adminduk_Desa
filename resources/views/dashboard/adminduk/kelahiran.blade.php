@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelahiran Anak Desa Palar</h1>
</div>
<div class="btn-group">
    <a href="{{ route('dashboard.adminduk.create_kelahiran') }}" class="btn btn-primary active" aria-current="page">Tambah</a>
</div>
<div class="table-responsive small">
    <table class="table table-striped table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">Nama Bayi</th>
                <th scope="col">Nik Bayi</th>
                <th scope="col">Nama Bayi</th>
                {{-- <th scope="col">Tempat Di Lahirkan</th>
                <th scope="col">Tempat Kelahiran</th>
                <th scope="col">Hari Dan Tanggal</th>
                <th scope="col">Pukul</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Anak Ke</th>
                <th scope="col">Penolong Kelahiran</th>
                <th scope="col">Berat Bayi</th>
                <th scope="col">Panjang Bayi</th> --}}
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelahiran as $kelahiran)
            <tr>
                {{-- <td width="200">{{ $kelahiran->nama_bayi }}</td> --}}
                <td>{{ $kelahiran->nama_bayi }}</td>
                <td>{{ $kelahiran->nik_bayi }}</td>
                <td>{{ $kelahiran->warganegara_bayi }}</td>
                {{-- <td width="170">{{ $kelahiran->tmpt_tgl_lahir }}</td>
                <td>{{ $kelahiran->agama }}</td>
                <td>{{ $kelahiran->jenis_kelamin }}</td>
                <td>{{ $kelahiran->warganegara }}</td>
                <td>{{ $kelahiran->alamat }}</td>
                <td>{{ $kelahiran->pekerjaan }}</td>
                <td>{{ $kelahiran->no_surat }}</td>
                <td>{{ $kelahiran->keperluan }}</td> --}}
                <td width="100">
                    <a href="{{ url('/dashboard/adminduk/' . $kelahiran->id . '/edit') }}" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ url('/dashboard/adminduk/' . $kelahiran->id) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $kelahiran->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="{{ url('/dashboard/adminduk/export/' . $kelahiran->id) }}" class="badge bg-primary" target="_blank">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $kelahiran->id }}" action="{{ url('/dashboard/adminduk/' . $kelahiran->id) }}" method="POST" style="display: none;">
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