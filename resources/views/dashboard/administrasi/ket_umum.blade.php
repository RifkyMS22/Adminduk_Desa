@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Surat Keterangan Umum</h1>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
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
                                <label for="nama">Jenis Kelamin</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Tempat</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Tanggal Lahir</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Warganegara</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Agama</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Pekerjaan</label>
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">RT</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">RW</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Keperluan</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Keterangan Lain</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>


                            {{-- <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="staticEmail">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword">
                                    </div>
                            </div> --}}

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