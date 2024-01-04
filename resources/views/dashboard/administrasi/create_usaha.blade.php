@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="mx-auto">
    <div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b border-gray-200">
        <h1 class="text-2xl font-semibold">Surat Keterangan Usaha</h1>
    </div>
</div>
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full lg:w-1/2">
            <div class="bg-white p-6 rounded-md shadow-md">
                <h2 class="text-3xl font-bold text-center mb-4">Create Keterangan Usaha</h2>
            <form method="POST" action="{{ route('dashboard.usaha.store') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                    <select id="nik" name="nik" class="form-select mt-1 block w-full" required>
                        <option value="" disabled selected>Pilih NIK atau masukkan NIK baru</option>
                        @foreach ($nikes as $data)
                        <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="no_kk" class="block text-sm font-medium text-gray-700">No. KK</label>
                    <input id="no_kk" type="text" name="no_kk" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="form-group mb-3">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input id="nama" type="text" class="mt-1 p-2 w-full border rounded-md" name="nama" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <input id="jenis_kelamin" type="text" class="mt-1 p-2 w-full border rounded-md" name="jenis_kelamin" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="binti" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                    <input id="nama_ayah" type="text" class="mt-1 p-2 w-full border rounded-md" name="binti" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tmpt_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                    <input id="tmpt_lahir" type="text" class="mt-1 p-2 w-full border rounded-md" name="tmpt_lahir" required>
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input id="tgl_lahir" type="text" class="mt-1 p-2 w-full border rounded-md" name="tgl_lahir" required>
                </div>

                <div class="form-group mb-3">
                    <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                    <input id="agama" type="text" class="mt-1 p-2 w-full border rounded-md" name="agama" required>
                </div>

                <div class="form-group mb-3">
                    <label for="warganegara" class="block text-sm font-medium text-gray-700">Warganegara</label>
                    <select id="warganegara" name="warganegara" class="form-select mt-1 p-2 w-full border rounded-md" required>
                        <option value="" disabled selected>Pilih Warganegara</option>
                        <option value="Indonesia">Warga Negara Indonesia</option>
                        <option value="Asing">Warga Negara Asing</option>
                    </select>
                </div>
                

                <div class="form-group mb-3">
                    <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                    <input id="pekerjaan" type="text" class="mt-1 p-2 w-full border rounded-md" name="pekerjaan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">alamat</label>
                    <input id="alamat" type="text" class="mt-1 p-2 w-full border rounded-md" name="alamat" required>
                </div>

                <div class="form-group mb-3">
                    <label for="no_surat" class="block text-sm font-medium text-gray-700">No Surat</label>
                    <input id="no_surat" type="text" class="mt-1 p-2 w-full border rounded-md" name="no_surat" required>
                </div>

                <div class="form-group mb-3">
                    <label for="keperluan" class="block text-sm font-medium text-gray-700">Keperluan</label>
                    <input id="keperluan" type="text" class="mt-1 p-2 w-full border rounded-md" name="keperluan" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</button>
                    <a href="{{ route('dashboard.usaha.index') }}" class="bg-gray-300 text-blue-500 py-2 px-4 rounded-md">Kembali</a>
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
                    $('#alamat').val(data.alamat);
                    $('#jns_kelamin').val(data.jns_kelamin);
                    $('#nama_ayah').val(data.nama_ayah);
                    $('#pekerjaan').val(data.pekerjaan);
                    $('#agama').val(data.agama);
                    $('#tmpt_lahir').val(data.tmpt_lahir);
                    $('#tgl_lahir').val(data.tgl_lahir);
                },
                error: function() {
                    console.error('Error fetching data.');
                }
            });
        });
    });
</script>

@endsection
