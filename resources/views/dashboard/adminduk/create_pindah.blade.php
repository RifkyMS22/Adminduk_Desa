@extends('dashboard.layouts-dashboard.app')      

@section('content')

<div class="container mx-auto mt-2">
    <h2 class="text-2xl font-semibold mb-6">Tambah Data Pindah</h2>
</div>
    <div class="max-w-full mx-auto bg-white p-6 rounded-md shadow-md">
        <form action="{{ route('dashboard.pindah.store') }}" method="post">
            @csrf
        <div>
            <h3 class="text-2xl font-semibold mb-6"> Data Pelapor</h3>
        
            <div class="mb-4">
                <label for="nik" class="block text-sm font-medium text-gray-600">NIK</label>
                <input type="text" name="nik" id="nik" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="text" name="email" id="email" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="no_hp" class="block text-sm font-medium text-gray-600">No Handphone</label>
                <input type="text" name="no_hp" id="no_hp" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-medium text-gray-600">Nomor Kartu Keluarga</label>
                <input type="text" name="no_kk" id="no_kk" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="almt_asal" class="block text-sm font-medium text-gray-600">Alamat Asal </label>
                <input type="text" name="almt_asal" id="almt_asal" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="rt" class="block text-sm font-medium text-gray-600">RT</label>
                <input type="text" name="rt" id="rt" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="rw" class="block text-sm font-medium text-gray-600">RW</label>
                <input type="text" name="rw" id="rw" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="provinsi" class="block text-sm font-medium text-gray-600">Provinsi</label>
                <input type="text" name="provinsi" id="provinsi" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="kabupaten" class="block text-sm font-medium text-gray-600">Kabupaten / Kota</label>
                <input type="text" name="kabupaten" id="kabupaten" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="kecamatan" class="block text-sm font-medium text-gray-600">Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="desa" class="block text-sm font-medium text-gray-600">Desa / Kelurahan</label>
                <input type="text" name="desa" id="desa" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="kd_pos" class="block text-sm font-medium text-gray-600">Kode Pos </label>
                <input type="text" name="kd_pos" id="kd_pos" class="mt-1 p-2 border rounded-md w-full">
            </div>
        </div>
        <div>
            <h3 class="text-2xl font-semibold mb-6"> Data Kepindahan</h3>
        
            <div class="mb-4">
                <label for="kls_pindah" class="block text-sm font-medium text-gray-600">Klasifikasi Kepindahan</label>
                <select name="kls_pindah" id="kls_pindah" class="mt-1 p-2 border rounded-md w-full">
                    <option value="" disabled selected>Pilih Klasifikasi Kepindahan</option>
                    <option value="1">Dalam satu desa/kelurahan atau yang disebut dengan nama lain</option>
                    <option value="2">Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan</option>
                    <option value="3">Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota</option>
                    <option value="4">Antar kabupaten/kota dalam satu provinsi</option>
                    <option value="5">Antar provinsi</option>
                </select>
            </div>          
            <div class="mb-4">
                <label for="almt_pindah" class="block text-sm font-medium text-gray-600">Alamat Pindah</label>
                <input type="text" name="almt_pindah" id="almt_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="rt_pindah" class="block text-sm font-medium text-gray-600">RT</label>
                <input type="text" name="rt_pindah" id="rt_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="rw_pindah" class="block text-sm font-medium text-gray-600">RW</label>
                <input type="text" name="rw_pindah" id="rw_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="provinsi_pindah" class="block text-sm font-medium text-gray-600">Provinsi</label>
                <input type="text" name="provinsi_pindah" id="provinsi_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="kota_pindah" class="block text-sm font-medium text-gray-600">Kabupaten / Kota </label>
                <input type="text" name="kota_pindah" id="kota_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="kd_pos_pindah" class="block text-sm font-medium text-gray-600">Kode Pos Pindah</label>
                <input type="text" name="kd_pos_pindah" id="kd_pos_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="alasan_pindah" class="block text-sm font-medium text-gray-600">Alasan Pindah</label>
                <select name="alasan_pindah" id="alasan_pindah" class="mt-1 p-2 border rounded-md w-full">
                    <option value="" disabled selected>Pilih Alasan Pindah</option>
                    <option value="Pekerjaan">Pekerjaan</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Keluarga">Keluarga</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>            
            <div class="mb-4">
                <label for="jns_kepindahan" class="block text-sm font-medium text-gray-600">Jenis Kepindahan</label>
                <select name="jns_kepindahan" id="jns_kepindahan" class="mt-1 p-2 border rounded-md w-full">
                    <option value="" disabled selected>Pilih Jenis Kepindahan</option>
                    <option value="kepala_keluarga">Kepala Keluarga</option>
                    <option value="kep_keluarga_seluruh_anggota">Kep. Kel. dan Seluruh Angg. Keluarga</option>
                    <option value="kep_keluarga_sbg_anggota">Kep. Kel. dan Sbg. Angg. Keluarga</option>
                    <option value="anggota keluarga">Anggota Keluarga</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="aggt_tdk_pindah" class="block text-sm font-medium text-gray-600">Anggota Keluarga Tidak Pindah</label>
                <select name="aggt_tdk_pindah" id="aggt_tdk_pindah" class="mt-1 p-2 border rounded-md w-full">
                    <option value="" disabled selected>Pilih Anggota Keluarga Tidak Pindah</option>
                    <option value="Numpang KK">Numpang KK</option>
                    <option value="Membuat KK Baru">Membuat KK Baru</option>
                    <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="aggt_pindah" class="block text-sm font-medium text-gray-600">Anggota Keluarga yang Pindah </label>
                <select name="aggt_pindah" id="aggt_pindah" class="mt-1 p-2 border rounded-md w-full">
                    <option value=""disabled selected>Pilih Anggota Keluarga Yang Pindah</option>
                    <option value="Numpang KK">Numpang KK</option>
                    <option value="Membuat KK Baru">Membuat KK Baru</option>
                    <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                </select>
            </div>
        </div>    
            <div class="mb-4">
                <label for="df_aggt_pindah" class="block text-sm font-medium text-gray-600">df_aggt_pindah</label>
                <input type="text" name="df_aggt_pindah" id="df_aggt_pindah" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <!-- Tambahkan input lain sesuai kebutuhan -->

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Simpan</button>
            </div>
        </form>
    </div>

@endsection