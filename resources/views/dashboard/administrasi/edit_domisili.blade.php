@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center flex-wrap md:flex-nowrap mt-8 mb-6">
    <h1 class="text-2xl font-semibold">Edit Keterangan Domisili</h1>
  </div>
  
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full md:w-2/3 lg:w-1/2">
        <div class="bg-white shadow-md p-6 rounded-md">
          <form method="POST" action="{{ url('/dashboard/administrasi/' . $domisili->id) }}">
            @csrf
            @method('PUT')
  
            <div class="mb-4">
              <label for="nik" class="block text-sm font-medium text-gray-600">NIK</label>
              <input id="nik" type="text" class="mt-1 p-2 w-full border rounded-md" name="nik" value="{{ $domisili->nik }}" required>
            </div>

            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-medium text-gray-600">NO KK</label>
                <input id="no_kk" type="text" class="mt-1 p-2 w-full border rounded-md" name="no_kk" value="{{ $domisili->no_kk }}" required>
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                <input id="nama" type="text" class="mt-1 p-2 w-full border rounded-md" name="nama" value="{{ $domisili->nama }}" required>
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                <input id="jenis_kelamin" type="text" class="mt-1 p-2 w-full border rounded-md" name="jenis_kelamin" value="{{ $domisili->jenis_kelamin }}" required>
            </div>
            <div class="mb-4">
                <label for="binti" class="block text-sm font-medium text-gray-600">Nama Ayah</label>
                <input id="binti" type="text" class="mt-1 p-2 w-full border rounded-md" name="binti" value="{{ $domisili->binti }}" required>
            </div>
            <div class="mb-4">
                <label for="tmpt_lahir" class="block text-sm font-medium text-gray-600">Tempat Lahir</label>
                <input id="tmpt_lahir" type="text" class="mt-1 p-2 w-full border rounded-md" name="tmpt_lahir" required>
            </div>
            <div class="mb-4">
                <label for="tgl_lahir" class="block text-sm font-medium text-gray-600">Tanggal Lahir</label>
                <input id="tgl_lahir" type="text" class="mt-1 p-2 w-full border rounded-md" name="tgl_lahir" required>
            </div>
            <div class="mb-4">
                <label for="agama" class="block text-sm font-medium text-gray-600">Agama</label>
                <input id="agama" type="text" class="mt-1 p-2 w-full border rounded-md" name="agama" value="{{ $domisili->agama }}" required>
            </div>
            <div class="mb-4">
                <label for="warganegara" class="block text-sm font-medium text-gray-600">Warganegara</label>
                <input id="warganegara" type="text" class="mt-1 p-2 w-full border rounded-md" name="warganegara" value="{{ $domisili->warganegara }}" required>
            </div>
            <div class="mb-4">
                <label for="pekerjaan" class="block text-sm font-medium text-gray-600">Pekerjaan</label>
                <input id="pekerjaan" type="text" class="mt-1 p-2 w-full border rounded-md" name="pekerjaan" value="{{ $domisili->pekerjaan }}" required>
            </div>
            <div class="mb-4">
                <label for="no_surat" class="block text-sm font-medium text-gray-600">No Surat</label>
                <input id="no_surat" type="text" class="mt-1 p-2 w-full border rounded-md" name="no_surat" value="{{ $domisili->no_surat }}" required>
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                <input id="alamat" type="text" class="mt-1 p-2 w-full border rounded-md" name="alamat" value="{{ $domisili->alamat }}" required>
            </div>

            <div class="mb-4">
                <label for="keperluan" class="block text-sm font-medium text-gray-600">Keperluan</label>
                <input id="keperluan" type="text" class="mt-1 p-2 w-full border rounded-md" name="keperluan" value="{{ $domisili->keperluan }}" required>
            </div>

            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
                <a href="{{ route('dashboard.administrasi.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded-md">Kembali</a>
              </div>              
        </form>
    </div>
</div>
</div>
</div>

@endsection