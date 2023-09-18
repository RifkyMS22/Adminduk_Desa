@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Keterangan Rekomendasi BBM</h1>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ url('/dashboard/bbm/adminnistrasi/' . $rekomendasiBbm->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ $rekomendasiBbm->nik }}" required>
                            </div>

                            <div class="form-group">
                                <label for="no_kk">NO KK</label>
                                <input id="no_kk" type="text" class="form-control" name="no_kk" value="{{ $rekomendasiBbm->no_kk }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $rekomendasiBbm->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ $rekomendasiBbm->jenis_kelamin }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tmpt_tgl_lahir">Tempat Tanggal Lahir</label>
                                <input id="tmpt_tgl_lahir" type="text" class="form-control" name="tmpt_tgl_lahir" value="{{ $rekomendasiBbm->tmpt_tgl_lahir }}" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $rekomendasiBbm->pekerjaan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $rekomendasiBbm->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat_usaha">Alamat Usaha</label>
                                <input id="alamat_usaha" type="text" class="form-control" name="alamat_usaha" value="{{ $rekomendasiBbm->alamat_usaha }}" required>
                            </div>
                            <div class="form-group">
                                <label for="konsumen_pengguna">Konsumen Pengguna</label>
                                <input id="konsumen_pengguna" type="text" class="form-control" name="konsumen_pengguna" value="{{ $rekomendasiBbm->konsumen_pengguna }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jns_usaha">Jenis Usaha</label>
                                <input id="jns_usaha" type="text" class="form-control" name="jns_usaha" value="{{ $rekomendasiBbm->jns_usaha }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_surat">No Surat</label>
                                <input id="no_surat" type="text" class="form-control" name="no_surat" value="{{ $rekomendasiBbm->no_surat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jns_bbm">Jenis BBM</label>
                                <input id="jns_bbm" type="text" class="form-control" name="jns_bbm" value="{{ $rekomendasiBbm->jns_bbm }}" required>
                            </div>
                            <div class="form-group">
                                <label for="masa_berlaku">Masa Berlaku</label>
                                <input id="masa_berlaku" type="text" class="form-control" name="masa_berlaku" value="{{ $rekomendasiBbm->masa_berlaku }}" required>
                            </div>

                            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('dashboard.bbm.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection