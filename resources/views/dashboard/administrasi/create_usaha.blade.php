@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Surat Keterangan Usaha</h1>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.usaha.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <select id="nik" class="form-control" name="nik" required>
                                <option value="" disabled selected>Pilih NIK</option>
                                @foreach ($nikes as $data)
                                <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                @endforeach
                            </select>
                            <label for="no_kk">NO KK</label>
                            <input id="no_kk" type="text" class="form-control" name="no_kk" required>
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" required>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" required>
                        </div>

                        {{-- <div class="form-group">
                            <label for="no_kk">NO KK</label>
                            <input id="no_kk" type="text" class="form-control" name="no_kk" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" required>
                        </div> --}}

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

<!-- Kode JavaScript -->
<<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#nik').on('change', function() { // Ganti 'nik' menjadi '#nik'
        var selectedNik = $(this).val();
        $.ajax({
            url: '/get-data-by-nik/' + selectedNik,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Anda perlu menggunakan selector yang benar di sini
                // Gunakan tanda '#' untuk mengidentifikasi ID elemen
                $('#no_kk').val(data.no_kk);
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jns_kelamin);
            },
            error: function() {
                console.error('Error fetching data.');
            }
        });
    });
});
</script>
@endsection
