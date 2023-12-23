@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl font-semibold">Edit Surat Keterangan Umum</h1>
</div>

<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <form method="POST" action="{{ route('dashboard.keteranganumum.update', ['keteranganUmum' => $keteranganUmum->id]) }}">
                    @csrf
                    @method('PUT')

                    <!-- Form inputs -->
                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-600">NIK</label>
                        <input id="nik" type="text" class="form-input mt-1 block w-full" name="nik" value="{{ $keteranganUmum->nik }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="no_kk" class="block text-sm font-medium text-gray-600">NO KK</label>
                        <input id="no_kk" type="text" class="form-input mt-1 block w-full" name="no_kk" value="{{ $keteranganUmum->no_kk }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                        <input id="nama" type="text" class="form-input mt-1 block w-full" name="nama" value="{{ $keteranganUmum->nama }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                        <input id="jenis_kelamin" type="text" class="form-input mt-1 block w-full" name="jenis_kelamin" value="{{ $keteranganUmum->jenis_kelamin }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="tmpt_tgl_lahir" class="block text-sm font-medium text-gray-600">Tempat Tanggal Lahir</label>
                        <input id="tmpt_tgl_lahir" type="text" class="form-input mt-1 block w-full" name="tmpt_tgl_lahir" value="{{ $keteranganUmum->tmpt_tgl_lahir }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="warganegara" class="block text-sm font-medium text-gray-600">Warganegara</label>
                        <input id="warganegara" type="text" class="form-input mt-1 block w-full" name="warganegara" value="{{ $keteranganUmum->warganegara }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="agama" class="block text-sm font-medium text-gray-600">Agama</label>
                        <input id="agama" type="text" class="form-input mt-1 block w-full" name="agama" value="{{ $keteranganUmum->agama }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="pekerjaan" class="block text-sm font-medium text-gray-600">Pekerjaan</label>
                        <input id="pekerjaan" type="text" class="form-input mt-1 block w-full" name="pekerjaan" value="{{ $keteranganUmum->pekerjaan }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                        <input id="alamat" type="text" class="form-input mt-1 block w-full" name="alamat" value="{{ $keteranganUmum->alamat }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="berlaku" class="block text-sm font-medium text-gray-600">Berlaku</label>
                        <input id="berlaku" type="text" class="form-input mt-1 block w-full" name="berlaku" value="{{ $keteranganUmum->berlaku }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="no_surat" class="block text-sm font-medium text-gray-600">Nomer Surat</label>
                        <input id="no_surat" type="text" class="form-input mt-1 block w-full" name="no_surat" value="{{ $keteranganUmum->no_surat }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="keperluan" class="block text-sm font-medium text-gray-600">Keperluan</label>
                        <input id="keperluan" type="text" class="form-input mt-1 block w-full" name="keperluan" value="{{ $keteranganUmum->keperluan }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="ket_lain"> class="block text-sm font-medium text-gray-600"Keterangan Lain</label>
                        <input id="ket_lain" type="text" class="form-input mt-1 block w-full" name="ket_lain" value="{{ $keteranganUmum->ket_lain }}" required>
                    </div>

                    <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                    <div class="mb-6">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('dashboard.keteranganumum.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection