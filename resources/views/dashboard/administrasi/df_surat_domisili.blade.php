@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Surat Keterangan Domisili</h1>
</div>
<div class="btn-group">
    <a href="/dashboard/create_domisili" class="btn btn-primary active" aria-current="page">Tambah</a>
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
        </tr>
        </thead>
        <tbody>
            @foreach ($domisili as $domisili)
            <tr>
                <td>{{ $domisili->nik }}</td>
                <td>{{ $domisili->no_kk }}</td>
                <td>{{ $domisili->nama}}</td>
                {{-- <td>{{ $domisili->alamat}}</td>
                <td>{{ $domisili->rt}}</td>
                <td>{{ $domisili->rw}}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection