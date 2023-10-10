@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dashboard.penduduk.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input id="nik" type="text" class="form-control" name="nik" required>
                            </div>

                            <div class="form-group">
                                <label for="no_kk">NO KK</label>
                                <input id="no_kk" type="text" class="form-control" name="no_kk" required>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>

                            <div class="form-group">
                                <label for="rt">RT</label>
                                <input id="rt" type="text" class="form-control" name="rt" required>
                            </div>
                            <div class="form-group">
                                <label for="rw">RW</label>
                                <input id="rw" type="text" class="form-control" name="rw" required>
                            </div>
                            <div class="form-group">
                                <label for="tmpt_lahir">tmpt_lahir</label>
                                <input id="tmpt_lahir" type="text" class="form-control" name="tmpt_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">tgl_lahir</label>
                                <input id="tgl_lahir" type="text" class="form-control" name="tgl_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="jns_kelamin">jns_kelamin</label>
                                <input id="jns_kelamin" type="text" class="form-control" name="jns_kelamin" required>
                            </div>
                            <div class="form-group">
                                <label for="stts_kawin">stts_kawin</label>
                                <input id="stts_kawin" type="text" class="form-control" name="stts_kawin" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">pendidikan</label>
                                <input id="pendidikan" type="text" class="form-control" name="pendidikan" required>
                            </div>
                            <div class="form-group">
                                <label for="stts_hub_keluarga">stts_hub_keluarga</label>
                                <input id="stts_hub_keluarga" type="text" class="form-control" name="stts_hub_keluarga" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">pekerjaan</label>
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" required>
                            </div>
                            <div class="form-group">
                                <label for="agama">agama</label>
                                <input id="agama" type="text" class="form-control" name="agama" required>
                            </div>
                            <div class="form-group">
                                <label for="no_akta_lahir">no_akta_lahir</label>
                                <input id="no_akta_lahir" type="text" class="form-control" name="no_akta_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="no_akta_nikah">no_akta_nikah</label>
                                <input id="no_akta_nikah" type="text" class="form-control" name="no_akta_nikah" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_nikah">tgl_nikah</label>
                                <input id="tgl_nikah" type="text" class="form-control" name="tgl_nikah" required>
                            </div>
                            <div class="form-group">
                                <label for="no_akta_cerai">no_akta_cerai</label>
                                <input id="no_akta_cerai" type="text" class="form-control" name="no_akta_cerai" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_cerai">tgl_cerai</label>
                                <input id="tgl_cerai" type="text" class="form-control" name="tgl_cerai" required>
                            </div>
                            <div class="form-group">
                                <label for="nik_ayah">nik_ayah</label>
                                <input id="nik_ayah" type="text" class="form-control" name="nik_ayah" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah">nama_ayah</label>
                                <input id="nama_ayah" type="text" class="form-control" name="nama_ayah" required>
                            </div>
                            <div class="form-group">
                                <label for="nik_ibu">nik_ibu</label>
                                <input id="nik_ibu" type="text" class="form-control" name="nik_ibu" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu">nama_ibu</label>
                                <input id="nama_ibu" type="text" class="form-control" name="nama_ibu" required>
                            </div>

                            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('dashboard.penduduk.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
