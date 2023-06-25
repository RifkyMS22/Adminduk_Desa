@extends('layouts.app')

@section('container')
    <div class="container">
        <h1>Data Penduduk</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                    <th>Pendidikan</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Perkawinan</th>
                    <th>Status Hubungan Keluarga</th>
                    <th>Kewarganegaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPenduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->nik }}</td>
                        <td>{{ $penduduk->nama}}</td>
                        <td>{{ $penduduk->tmpt_tgl_lahir }}</td>
                        <td>{{ $penduduk->nama_ayah }}</td>
                        <td>{{ $penduduk->nama_ibu }}</td>
                        <td>{{ $penduduk->agama }}</td>
                        <td>{{ $penduduk->pekerjaan }}</td>
                        <td>{{ $penduduk->pendidikan }}</td>
                        <td>{{ $penduduk->jenis_kelamin }}</td>
                        <td>{{ $penduduk->status_perkawinan }}</td>
                        <td>{{ $penduduk->stts_hub_keluarga }}</td>
                        <td>{{ $penduduk->kewarganegaraan }}</td>
                @endforeach

                <div class="btn-group">
                    <a href="/creatependuduk" class="btn btn-primary active" aria-current="page">Tambah</a>
                </div>
                <div class="btn-group ms-3">
                    <a href="/editpenduduk" class="btn btn-primary active" aria-current="page">Edit</a>
                </div>

            </tbody>
        </table>
    </div>
@endsection
