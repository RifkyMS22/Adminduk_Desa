@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h1 class="text-2xl font-semibold">Edit Keterangan Rekomendasi BBM</h1>
</div>

<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form method="POST" action="{{ url('/dashboard/bbm/adminnistrasi/' . $rekomendasiBbm->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-600">NIK</label>
                        <input id="nik" type="text" name="nik" value="{{ $rekomendasiBbm->nik }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="no_kk" class="block text-sm font-medium text-gray-600">NO KK</label>
                        <input id="no_kk" type="text" name="no_kk" value="{{ $rekomendasiBbm->no_kk }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                            <div class="mb-4">
                                <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $rekomendasiBbm->nama }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                                <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ $rekomendasiBbm->jenis_kelamin }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="tmpt_tgl_lahir" class="block text-sm font-medium text-gray-600">Tempat Tanggal Lahir</label>
                                <input id="tmpt_tgl_lahir" type="text" class="form-control" name="tmpt_tgl_lahir" value="{{ $rekomendasiBbm->tmpt_tgl_lahir }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="pekerjaan" class="block text-sm font-medium text-gray-600">Pekerjaan</label>
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $rekomendasiBbm->pekerjaan }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $rekomendasiBbm->alamat }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="alamat_usaha" class="block text-sm font-medium text-gray-600">Alamat Usaha</label>
                                <input id="alamat_usaha" type="text" class="form-control" name="alamat_usaha" value="{{ $rekomendasiBbm->alamat_usaha }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="konsumen_pengguna" class="block text-sm font-medium text-gray-600">Konsumen Pengguna</label>
                                <input id="konsumen_pengguna" type="text" class="form-control" name="konsumen_pengguna" value="{{ $rekomendasiBbm->konsumen_pengguna }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="jns_usaha" class="block text-sm font-medium text-gray-600">Jenis Usaha</label>
                                <input id="jns_usaha" type="text" class="form-control" name="jns_usaha" value="{{ $rekomendasiBbm->jns_usaha }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="no_surat" class="block text-sm font-medium text-gray-600">No Surat</label>
                                <input id="no_surat" type="text" class="form-control" name="no_surat" value="{{ $rekomendasiBbm->no_surat }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="jns_bbm" class="block text-sm font-medium text-gray-600">Jenis BBM</label>
                                <input id="jns_bbm" type="text" class="form-control" name="jns_bbm" value="{{ $rekomendasiBbm->jns_bbm }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="masa_berlaku" class="block text-sm font-medium text-gray-600">Masa Berlaku</label>
                                <input id="masa_berlaku" type="text" class="form-control" name="masa_berlaku" value="{{ $rekomendasiBbm->masa_berlaku }}" required>
                            </div>

                            <!-- Tambahkan input lain sesuai dengan kebutuhan Anda -->

                            <div class="flex items-center justify-between mt-4">
                                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
                                <a href="{{ route('dashboard.bbm.index') }}" class="bg-gray-300 text-blue-500 py-2 px-4 rounded-md">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection