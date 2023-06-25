@extends('layouts.app')

@section('container')

<div class="container">
    <h2>Edit Data Penduduk</h2>
    <form method="POST" action="{{ route('datapenduduk.update', $dataPenduduk->nik) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $dataPenduduk->nik }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dataPenduduk->nama }}">
        </div>
        <div class="mb-3">
            <label for="tmpt_tgl_lahir" class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" id="tmpt_tgl_lahir" name="tmpt_tgl_lahir" placeholder="Masukkan Tempat Tanggal Lahir">
        </div>
        <div class="mb-3">
            <label for="nama_ayah" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah">
        </div>
        <div class="mb-3">
            <label for="nama_ibu" class="form-label">Nama Ibu</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu">
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama">
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan">
        </div>
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
        </div>
        <div class="mb-3">
            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
            <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Masukkan Status Perkawinan">
        </div>
        <div class="mb-3">
            <label for="stts_hub_keluarga" class="form-label">Status Hubungan Keluarga</label>
            <input type="text" class="form-control" id="stts_hub_keluarga" name="stts_hub_keluarga" placeholder="Masukkan Status Hubungan Keluarga">
        </div>
        <div class="mb-3">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Masukkan Kewarganegaraan">
        </div>
        <!-- Tambahkan atribut lain sesuai kebutuhan -->
        <input type="submit" name="submit" class="btn btn-primary" value="Update">
    </form>
</div>

@endsection
