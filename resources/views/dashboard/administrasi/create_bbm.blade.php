@extends('dashboard.layouts-dashboard.app')

@section('content')

<div class="mx-auto">
    <div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b border-gray-200">
        <h1 class="text-2xl font-semibold">Surat Keterangan Rekomendasi BBM</h1>
    </div>
</div>
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-4">Create Rekomendasi BBM</h2>
                <form method="POST" action="{{ route('dashboard.bbm.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-600">NIK</label>
                        <select id="nik" name="nik" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="" disabled selected>Pilih NIK atau masukkan NIK baru</option>
                            @foreach ($nikes as $data)
                            <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="no_kk" class="block text-sm font-medium text-gray-600">NO KK</label>
                        <input id="no_kk" type="text" name="no_kk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                            <div class="mb-4">
                                <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                                <input id="nama" type="text"class="mt-1 p-2 w-full border rounded-md" name="nama" required>
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                                <input id="jenis_kelamin" type="text"class="mt-1 p-2 w-full border rounded-md" name="jenis_kelamin" required>
                            </div>
                            <div class="mb-4">
                                <label for="tmpt_lahir" class="block text-sm font-medium text-gray-600">Tempat Lahir</label>
                                <input id="tmpt_lahir" type="text"class="mt-1 p-2 w-full border rounded-md" name="tmpt_lahir" required>
                            </div>
                            <div class="mb-4">
                                <label for="tgl_lahir" class="block text-sm font-medium text-gray-600">Tanggal Lahir</label>
                                <input id="tgl_lahir" type="text"class="mt-1 p-2 w-full border rounded-md" name="tgl_lahir" required>
                            </div>
                            <div class="mb-4">
                                <label for="pekerjaan" class="block text-sm font-medium text-gray-600">Pekerjaan</label>
                                <input id="pekerjaan" type="text"class="mt-1 p-2 w-full border rounded-md" name="pekerjaan" required>
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                                <input id="alamat" type="text"class="mt-1 p-2 w-full border rounded-md" name="alamat" required>
                            </div>
                            <div class="mb-4">
                                <label for="alamat_usaha" class="block text-sm font-medium text-gray-600">Alamat Usaha</label>
                                <input id="alamat_usaha" type="text"class="mt-1 p-2 w-full border rounded-md" name="alamat_usaha" required>
                            </div>
                            <div class="mb-4">
                                <label for="konsumen_pengguna" class="block text-sm font-medium text-gray-600">Konsumen Pengguna</label>
                                <input id="konsumen_pengguna" type="text"class="mt-1 p-2 w-full border rounded-md" name="konsumen_pengguna" required>
                            </div>
                            <div class="mb-4">
                                <label for="jns_usaha" class="block text-sm font-medium text-gray-600">Jenis Usaha</label>
                                <input id="jns_usaha" type="text"class="mt-1 p-2 w-full border rounded-md" name="jns_usaha" required>
                            </div>
                            <div class="mb-4">
                                <label for="no_surat" class="block text-sm font-medium text-gray-600">No Surat</label>
                                <input id="no_surat" type="text"class="mt-1 p-2 w-full border rounded-md" name="no_surat" required>
                            </div>
                            <div class="mb-4">
                                <label for="jns_bbm" class="block text-sm font-medium text-gray-600">Jenis BBM</label>
                                <select id="jns_bbm" name="jns_bbm" class="form-select mt-1 p-2 w-full border rounded-md" required>
                                    <option value="" disabled selected>Pilih Jenis BBM</option>
                                    <option value="Pertalite">Pertalite</option>
                                    <option value="Solar">Solar</option>
                                </select>
                            </div>                            
                            <div class="mb-4">
                                <label for="masa_berlaku" class="block text-sm font-medium text-gray-600">Masa Berlaku</label>
                                <input id="masa_berlaku" type="text"class="mt-1 p-2 w-full border rounded-md" name="masa_berlaku" required>
                            </div>

                            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                            <div class="flex items-center justify-between mt-4">
                                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</button>
                                <a href="{{ route('dashboard.bbm.index') }}" class="bg-gray-300 text-blue-500 py-2 px-4 rounded-md">Kembali</a>
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