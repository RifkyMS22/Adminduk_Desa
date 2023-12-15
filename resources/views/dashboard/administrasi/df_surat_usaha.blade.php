@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Surat Keterangan Usaha</h1>
</div>
<div class="btn-group">
    <a href="/dashboard/create_usaha" class="btn btn-primary active" aria-current="page">Tambah</a>
  </div>
<div class="table-responsive small">
    <table class="table table-striped table-sm table-bordered">
        <thead>
        <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">NIK</th>
            <th scope="col">No KK</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
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
            @foreach ($usaha as $usaha)
            <tr>
                <td>{{ $usaha->nama}}</td>
                <td>{{ $usaha->nik }}</td>
                <td>{{ $usaha->no_kk }}</td>
                <td>{{ $usaha->binti }}</td>
                <td>{{ $usaha->tmpt_lahir }}</td>
                <td>{{ $usaha->tgl_lahir }}</td>
                <td>{{ $usaha->agama}}</td>
                <td>{{ $usaha->jenis_kelamin}}</td>
                <td>{{ $usaha->warganegara}}</td>
                <td>{{ $usaha->alamat}}</td>
                <td>{{ $usaha->pekerjaan}}</td>
                <td>{{ $usaha->no_surat}}</td>
                <td>{{ $usaha->keperluan}}</td>
                <td width="100">
                    <a href="{{ url('/dashboard/usaha/administrasi/' . $usaha->id . '/edit') }}" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ url('/dashboard/usaha/administrasi/' . $usaha->id) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $usaha->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="{{ url('/dashboard/usaha/administrasi/export/' . $usaha->id) }}" class="badge bg-primary" target="_blank">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $usaha->id }}" action="{{ url('/dashboard/usaha/store' . $usaha->id) }}" method="POST" style="display: none;">
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