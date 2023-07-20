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
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat, tanggal Lahir</th>
            <th scope="col">Warganegara</th>
            <th scope="col">Agama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Tempat Tinggal</th>
            <th scope="col">Surat Bukti Diri</th>
            <th scope="col">Keperluan</th>
            <th scope="col">Berlaku</th>
            <th scope="col">Keterangan Lain</th>
        </tr>
        </thead>
        <tbody>
            {{-- @foreach ($dataPenduduk as $penduduk) --}}
            <tr>
                {{-- <td>{{ $penduduk->nik }}</td>
                <td>{{ $penduduk->no_kk }}</td>
                <td>{{ $penduduk->nama}}</td>
                <td>{{ $penduduk->alamat}}</td>
                <td>{{ $penduduk->rt}}</td>
                <td>{{ $penduduk->rw}}</td> --}}
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection