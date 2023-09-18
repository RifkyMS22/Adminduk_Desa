@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Surat Rekomendasi BBM</h1>
</div>
<div class="btn-group">
    <a href="/dashboard/create_bbm" class="btn btn-primary active" aria-current="page">Tambah</a>
  </div>
<div class="table-responsive small">
    <table class="table table-striped table-sm table-bordered">
        <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">No KK</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat, tanggal Lahir</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Alamat Usaha</th>
            <th scope="col">konsumen pengguna</th>
            <th scope="col">Jenis USaha</th>
            <th scope="col">No Surat</th>
            <th scope="col">Jenis BBM</th>
            <th scope="col">Masa Berlaku</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($rekomendasiBbm as $rekomendasiBbm)
            <tr>
                <td>{{ $rekomendasiBbm->nama}}</td>
                <td>{{ $rekomendasiBbm->nik }}</td>
                <td>{{ $rekomendasiBbm->no_kk }}</td>
                <td>{{ $rekomendasiBbm->jenis_kelamin}}</td>
                <td>{{ $rekomendasiBbm->tmpt_tgl_lahir}}</td>
                <td>{{ $rekomendasiBbm->pekerjaan}}</td>
                <td>{{ $rekomendasiBbm->alamat}}</td>
                <td>{{ $rekomendasiBbm->alamat_usaha}}</td>
                <td>{{ $rekomendasiBbm->konsumen_pengguna}}</td>
                <td>{{ $rekomendasiBbm->jns_usaha}}</td>
                <td>{{ $rekomendasiBbm->no_surat}}</td>
                <td>{{ $rekomendasiBbm->jns_bbm}}</td>
                <td>{{ $rekomendasiBbm->masa_berlaku}}</td>

                <td width="100">
                    <a href="{{ url('/dashboard/bbm/administrasi/' . $rekomendasiBbm->id . '/edit') }}" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ url('/dashboard/bbm/administrasi/' . $rekomendasiBbm->id) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $rekomendasiBbm->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="{{ url('/dashboard/administrasi/domisili/export/' . $rekomendasiBbm->id) }}" class="badge bg-primary" target="_blank">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $rekomendasiBbm->id }}" action="{{ url('/dashboard/bbm/administrasi/' . $rekomendasiBbm->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            @endforeach
            <script>
                feather.replace()
            </script>
        </tbody>
    </table>
</div>
@endsection