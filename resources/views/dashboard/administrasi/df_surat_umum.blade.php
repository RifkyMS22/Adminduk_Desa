@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Surat Keterangan Umum</h1>
</div>
<div class="btn-group">
    <a href="{{ route('dashboard.keteranganumum.create') }}" class="btn btn-primary active" aria-current="page">Tambah</a>
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
            <th scope="col">Warganegara</th>
            <th scope="col">Agama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Berlaku</th>
            <th scope="col">No Surat</th>
            <th scope="col">Keterangan Lain</th>
            <th scope="col">Keperluan</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($keteranganUmum as $keteranganUmum)
            <tr>
                <td>{{ $keteranganUmum->nama}}</td>
                <td>{{ $keteranganUmum->nik }}</td>
                <td>{{ $keteranganUmum->no_kk }}</td>
                <td>{{ $keteranganUmum->jenis_kelamin }}</td>
                <td>{{ $keteranganUmum->tmpt_tgl_lahir}}</td>
                <td>{{ $keteranganUmum->warganegara}}</td>
                <td>{{ $keteranganUmum->agama}}</td>
                <td>{{ $keteranganUmum->pekerjaan}}</td>
                <td>{{ $keteranganUmum->alamat}}</td>
                <td>{{ $keteranganUmum->berlaku}}</td>
                <td>{{ $keteranganUmum->no_surat}}</td>
                <td>{{ $keteranganUmum->ket_lain}}</td>
                <td>{{ $keteranganUmum->keperluan}}</td>
                <td width="100">
                    <a href="{{ route('dashboard.keteranganumum.edit', ['keteranganUmum' => $keteranganUmum->id]) }}" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ route('dashboard.keteranganumum.destroy', ['keteranganUmum' => $keteranganUmum->id]) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $keteranganUmum->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="" class="badge bg-primary" target="_blank">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $keteranganUmum->id }}" action="{{ route('dashboard.keteranganumum.destroy', ['keteranganUmum' => $keteranganUmum->id]) }}" method="POST" style="display: none;">
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