@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="mx-auto">
    <div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b border-gray-200">
    <h1 class="text-2xl font-semibold">Surat Keterangan Umum</h1>
</div>
</div>
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full lg:w-1/2">
            <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-3xl font-bold text-center mb-4">Create Keterangan Umum</h2>
            <form method="POST" action="{{ route('dashboard.keteranganumum.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                    <select id="nik" name="nik" class="form-input mt-1 block w-full">
                        <option value="" disabled selected>Pilih NIK atau masukkan NIK baru</option>
                        @foreach ($nikes as $data)
                        <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="no_kk" class="block text-sm font-medium text-gray-600">NO KK</label>
                    <input id="no_kk" type="text" class="mt-1 p-2 w-full border rounded-md" name="no_kk" required>
                </div>

                <div class="form-group">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                    <input id="nama" type="text" class="mt-1 p-2 w-full border rounded-md" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                    <input id="jenis_kelamin" type="text" class="mt-1 p-2 w-full border rounded-md" name="jenis_kelamin" required>
                </div>
                <div class="form-group">
                    <label for="tmpt_lahir" class="block text-sm font-medium text-gray-600">Tempat Lahir</label>
                    <input id="tmpt_lahir" type="text" class="mt-1 p-2 w-full border rounded-md" name="tmpt_lahir" required>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir" class="block text-sm font-medium text-gray-600">Tanggal Lahir</label>
                    <input id="tgl_lahir" type="text" class="mt-1 p-2 w-full border rounded-md" name="tgl_lahir" required>
                </div>
                <div class="form-group">
                    <label for="agama" class="block text-sm font-medium text-gray-600">Agama</label>
                    <input id="agama" type="text" class="mt-1 p-2 w-full border rounded-md" name="agama" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan" class="block text-sm font-medium text-gray-600">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="mt-1 p-2 w-full border rounded-md" name="pekerjaan" required>
                </div>
                
                <div class="form-group">
                    <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                    <input id="alamat" type="text" class="mt-1 p-2 w-full border rounded-md" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="rt" class="block text-sm font-medium text-gray-600">RT</label>
                    <input id="rt" type="text" class="mt-1 p-2 w-full border rounded-md" name="rt" required>
                </div>
                <div class="form-group">
                    <label for="rw" class="block text-sm font-medium text-gray-600">Alamat</label>
                    <input id="rw" type="text" class="mt-1 p-2 w-full border rounded-md" name="rw" required>
                </div>
                <div class="form-group">
                    <label for="warganegara" class="block text-sm font-medium text-gray-600">Warganegara</label>
                    <input id="warganegara" type="text" class="mt-1 p-2 w-full border rounded-md" name="warganegara" required>
                </div>
                <div class="form-group">
                    <label for="berlaku" class="block text-sm font-medium text-gray-600">Berlaku</label>
                    <input id="berlaku" type="text" class="mt-1 p-2 w-full border rounded-md" name="berlaku" required>
                </div>
                <div class="form-group">
                    <label for="no_surat" class="block text-sm font-medium text-gray-600">Nomer Surat</label>
                    <input id="no_surat" type="text" class="mt-1 p-2 w-full border rounded-md" name="no_surat" required>
                </div>
                <div class="form-group">
                    <label for="keperluan" class="block text-sm font-medium text-gray-600">Keperluan</label>
                    <input id="keperluan" type="text" class="mt-1 p-2 w-full border rounded-md" name="keperluan" required>
                </div>
                <div class="form-group">
                    <label for="ket_lain" class="block text-sm font-medium text-gray-600">Keterangan Lain</label>
                    <input id="ket_lain" type="text" class="mt-1 p-2 w-full border rounded-md" name="ket_lain" required>
                </div>

                <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Tambah</button>
                    <a href="{{ route('dashboard.keteranganumum.index') }}" class="bg-gray-400 text-white p-2 rounded-md">Kembali</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

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
                    $('#tmpt_lahir').val(data.tmpt_lahir);
                    $('#tgl_lahir').val(data.tgl_lahir);
                    $('#agama').val(data.agama);
                    $('#pekerjaan').val(data.pekerjaan);
                    $('#alamat').val(data.alamat);
                    $('#rt').val(data.rt);
                    $('#rw').val(data.rw);
                },
                error: function() {
                    console.error('Error fetching data.');
                }
            });
        });
    });
</script>
@endsection