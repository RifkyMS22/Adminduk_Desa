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
                        <div class="form-group mb-3">
                            <label for="nik">NIK</label>
                            <select id="nik" class="form-control" name="nik" required>
                                <option value="" disabled selected>Pilih NIK atau masukkan NIK baru</option>
                                @foreach ($nikes as $data)
                                <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_kk">No. KK</label>
                            <input id="no_kk" type="text" class="form-control" name="no_kk" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" required>
                        </div>

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
<script>
    $(document).ready(function() {
        // Inisialisasi Select2 di elemen 'nik'
        $('#nik').select2({
            theme: 'bootstrap-5'
        });

        // Menggunakan event 'change' pada elemen 'nik'
        $('#nik').on('change', function() {
            var selectedNik = $(this).val();
            $.ajax({
                url: '/get-data-by-nik/' + selectedNik,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
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
