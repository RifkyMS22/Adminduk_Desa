@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Keterangan Domisili</h1>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ url('/dashboard/adminduk/' . $kelahiran->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nik_bayi">NIK BAYI</label>
                                <input id="nik_bayi" type="text" class="form-control" name="nik_bayi" value="{{ $kelahiran->nik_bayi }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_bayi">NAMA BAYI</label>
                                <input id="nama_bayi" type="text" class="form-control" name="nama_bayi" value="{{ $kelahiran->nama_bayi }}" required>
                            </div>

                            <div class="form-group">
                                <label for="warganegara_bayi">WARGANEGARA</label>
                                <input id="warganegara_bayi" type="text" class="form-control" name="warganegara_bayi" value="{{ $kelahiran->warganegara_bayi }}" required>
                            </div>
                            {{-- <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ $domisili->jenis_kelamin }}" required>
                            </div>
                            <div class="form-group">
                                <label for="binti">Nama Ayah</label>
                                <input id="binti" type="text" class="form-control" name="binti" value="{{ $domisili->binti }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tmpt_tgl_lahir">Tempat Tanggal Lahir</label>
                                <input id="tmpt_tgl_lahir" type="text" class="form-control" name="tmpt_tgl_lahir" value="{{ $domisili->tmpt_tgl_lahir }}" required>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input id="agama" type="text" class="form-control" name="agama" value="{{ $domisili->agama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="warganegara">Warganegara</label>
                                <input id="warganegara" type="text" class="form-control" name="warganegara" value="{{ $domisili->warganegara }}" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $domisili->pekerjaan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_surat">No Surat</label>
                                <input id="no_surat" type="text" class="form-control" name="no_surat" value="{{ $domisili->no_surat }}" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $domisili->alamat }}" required>
                            </div>

                            <div class="form-group">
                                <label for="keperluan">Keperluan</label>
                                <input id="keperluan" type="text" class="form-control" name="keperluan" value="{{ $domisili->keperluan }}" required>
                            </div> --}}

                            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('dashboard.adminduk.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection