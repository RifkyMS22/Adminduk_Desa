@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-xl font-semibold mb-6">Tambah Data</div>
                <form method="POST" action="{{ route('dashboard.penduduk.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-600">NIK</label>
                        <input id="nik" type="text" name="nik" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="no_kk" class="block text-sm font-medium text-gray-600">NO KK</label>
                        <input id="no_kk" type="text" name="no_kk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                        <input id="nama" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="nama" required>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                        <input id="alamat" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="alamat" required>
                    </div>

                    <div class="mb-4">
                        <label for="rt" class="block text-sm font-medium text-gray-600">RT</label>
                        <input id="rt" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="rt" required>
                    </div>
                    <div class="mb-4">
                        <label for="rw" class="block text-sm font-medium text-gray-600">RW</label>
                        <input id="rw" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="rw" required>
                    </div>
                    <div class="mb-4">
                        <label for="tmpt_lahir" class="block text-sm font-medium text-gray-600">tmpt_lahir</label>
                        <input id="tmpt_lahir" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="tmpt_lahir" required>
                    </div>
                    <div class="mb-4">
                        <label for="tgl_lahir" class="block text-sm font-medium text-gray-600">tgl_lahir</label>
                        <input id="tgl_lahir" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="tgl_lahir" required>
                    </div>
                    <div class="mb-4">
                        <label for="jns_kelamin" class="block text-sm font-medium text-gray-600">jns_kelamin</label>
                        <input id="jns_kelamin" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="jns_kelamin" required>
                    </div>
                    <div class="mb-4">
                        <label for="stts_kawin" class="block text-sm font-medium text-gray-600">stts_kawin</label>
                        <input id="stts_kawin" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="stts_kawin" required>
                    </div>
                    <div class="mb-4">
                        <label for="pendidikan" class="block text-sm font-medium text-gray-600">pendidikan</label>
                        <input id="pendidikan" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="pendidikan" required>
                    </div>
                    <div class="mb-4">
                        <label for="stts_hub_keluarga" class="block text-sm font-medium text-gray-600">stts_hub_keluarga</label>
                        <input id="stts_hub_keluarga" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="stts_hub_keluarga" required>
                    </div>
                    <div class="mb-4">
                        <label for="pekerjaan" class="block text-sm font-medium text-gray-600">pekerjaan</label>
                        <input id="pekerjaan" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="pekerjaan" required>
                    </div>
                    <div class="mb-4">
                        <label for="agama" class="block text-sm font-medium text-gray-600">agama</label>
                        <input id="agama" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="agama" required>
                    </div>
                    <div class="mb-4">
                        <label for="no_akta_lahir" class="block text-sm font-medium text-gray-600">no_akta_lahir</label>
                        <input id="no_akta_lahir" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="no_akta_lahir" required>
                    </div>
                    <div class="mb-4">
                        <label for="no_akta_nikah" class="block text-sm font-medium text-gray-600">no_akta_nikah</label>
                        <input id="no_akta_nikah" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="no_akta_nikah" required>
                    </div>
                    <div class="mb-4">
                        <label for="tgl_nikah" class="block text-sm font-medium text-gray-600">tgl_nikah</label>
                        <input id="tgl_nikah" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="tgl_nikah" required>
                    </div>
                    <div class="mb-4">
                        <label for="no_akta_cerai" class="block text-sm font-medium text-gray-600">no_akta_cerai</label>
                        <input id="no_akta_cerai" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="no_akta_cerai" required>
                    </div>
                    <div class="mb-4">
                        <label for="tgl_cerai" class="block text-sm font-medium text-gray-600">tgl_cerai</label>
                        <input id="tgl_cerai" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="tgl_cerai" required>
                    </div>
                    <div class="mb-4">
                        <label for="nik_ayah" class="block text-sm font-medium text-gray-600">nik_ayah</label>
                        <input id="nik_ayah" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="nik_ayah" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama_ayah" class="block text-sm font-medium text-gray-600">nama_ayah</label>
                        <input id="nama_ayah" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="nama_ayah" required>
                    </div>
                    <div class="mb-4">
                        <label for="nik_ibu" class="block text-sm font-medium text-gray-600">nik_ibu</label>
                        <input id="nik_ibu" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="nik_ibu" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama_ibu" class="block text-sm font-medium text-gray-600">nama_ibu</label>
                        <input id="nama_ibu" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="nama_ibu" required>
                    </div>

                    <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                    <div class="flex items-center justify-between mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</button>
                        <a href="{{ route('dashboard.penduduk.index') }}" class="bg-gray-300 text-blue-500 py-2 px-4 rounded-md">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
