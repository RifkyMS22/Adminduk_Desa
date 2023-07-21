@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Surat Keterangan Umum</h1>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('dashboard.keteranganumum.update', ['keteranganUmum' => $keteranganUmum->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ $keteranganUmum->nik }}" equired>
                            </div>

                            <div class="form-group">
                                <label for="no_kk">NO KK</label>
                                <input id="no_kk" type="text" class="form-control" name="no_kk" value="{{ $keteranganUmum->no_kk }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $keteranganUmum->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ $keteranganUmum->jenis_kelamin }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tmpt_tgl_lahir">Tempat Tanggal Lahir</label>
                                <input id="tmpt_tgl_lahir" type="text" class="form-control" name="tmpt_tgl_lahir" value="{{ $keteranganUmum->tmpt_tgl_lahir }}" required>
                            </div>
                            <div class="form-group">
                                <label for="warganegara">Warganegara</label>
                                <input id="warganegara" type="text" class="form-control" name="warganegara" value="{{ $keteranganUmum->warganegara }}" required>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input id="agama" type="text" class="form-control" name="agama" value="{{ $keteranganUmum->agama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $keteranganUmum->pekerjaan }}" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $keteranganUmum->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="berlaku">Berlaku</label>
                                <input id="berlaku" type="text" class="form-control" name="berlaku" value="{{ $keteranganUmum->berlaku }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_surat">Nomer Surat</label>
                                <input id="no_surat" type="text" class="form-control" name="no_surat" value="{{ $keteranganUmum->no_surat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="keperluan">Keperluan</label>
                                <input id="keperluan" type="text" class="form-control" name="keperluan" value="{{ $keteranganUmum->keperluan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ket_lain">Keterangan Lain</label>
                                <input id="ket_lain" type="text" class="form-control" name="ket_lain" value="{{ $keteranganUmum->ket_lain }}" required>
                            </div>

                            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('dashboard.keteranganumum.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection