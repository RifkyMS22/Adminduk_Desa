@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl">Surat Keterangan Domisili</h1>
</div>

<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full lg:w-1/2">
            <div class="bg-white p-6 rounded-md shadow-md">
                <form method="POST" action="{{ route('dashboard.administrasi.store') }}">
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
                    <div class="mb-3">
                        <label for="no_kk" class="block text-sm font-medium text-gray-700">NO KK</label>
                        <input id="no_kk" type="text" class="form-input mt-1 block w-full" name="no_kk" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input id="nama" type="text" class="form-input mt-1 block w-full" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <input id="jenis_kelamin" type="text" class="form-input mt-1 block w-full" name="jenis_kelamin" required>
                    </div>
                    <div class="mb-3">
                        <label for="binti" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                        <input id="nama_ayah" type="text" class="form-input mt-1 block w-full" name="binti" required>
                    </div>

                    <div class="mb-3">
                        <label for="tmpt_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                        <input id="tmpt_lahir" type="text" class="form-input mt-1 block w-full" name="tmpt_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input id="tgl_lahir" type="text" class="form-input mt-1 block w-full" name="tgl_lahir" required>
                    </div>

                    <div class="mb-3">
                        <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                        <input id="agama" type="text" class="form-input mt-1 block w-full" name="agama" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                        <input id="pekerjaan" type="text" class="form-input mt-1 block w-full" name="pekerjaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input id="alamat" type="text" class="form-input mt-1 block w-full" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="warganegara" class="block text-sm font-medium text-gray-700">Warganegara</label>
                        <input id="warganegara" type="text" class="form-input mt-1 block w-full" name="warganegara" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_surat" class="block text-sm font-medium text-gray-700">No Surat</label>
                        <input id="no_surat" type="text" class="form-input mt-1 block w-full" name="no_surat" required>
                    </div>


                    <div class="mb-3">
                        <label for="keperluan" class="block text-sm font-medium text-gray-700">Keperluan</label>
                        <input id="keperluan" type="text" class="form-input mt-1 block w-full" name="keperluan" required>
                    </div>

                    <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                    <div class="mb-3">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</button>
                        <a href="{{ route('dashboard.administrasi.index') }}" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-md">Kembali</a>
                    </div>
                </form>
            </div>
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
                    $('#jns_kelamin').val(data.jns_kelamin);
                    $('#nama_ayah').val(data.nama_ayah);
                    $('#agama').val(data.agama);
                    $('#pekerjaan').val(data.pekerjaan);
                    $('#alamat').val(data.alamat);
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