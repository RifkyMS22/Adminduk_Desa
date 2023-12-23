@extends('layouts.app')

@section('container')
    {{-- <div class="flex justify-center items-center h-screen"> --}}
        <div class="page-section max-w-lg p-8 bg-white shadow-md rounded-md my-10 mx-auto">
            <h2 class="page-section-heading text-center text-uppercase mb-6">Pengajuan Layanan</h2>

            {{-- <form method="post" action="{{ route('layanan.store') }}"> --}}
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" class="form-input w-full mt-1 p-3 border rounded-md" id="nama" name="nama" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" class="form-input w-full mt-1 p-3 border rounded-md" id="email" name="email" required>
            </div>

            <div class="mb-4">
                <label for="layanan" class="block text-sm font-medium text-gray-600">Pilih Layanan</label>
                <select class="form-select w-full mt-1 p-3 border rounded-md" id="layanan" name="layanan" required>
                    <option value="surat_keterangan_umum">Surat Keterangan Umum</option>
                    <option value="surat_keterangan_domisili">Surat Keterangan Domisili</option>
                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                </select>
            </div>

            <div class="mb-4">
                <label for="pesan" class="block text-sm font-medium text-gray-600">Pesan</label>
                <textarea class="form-textarea w-full mt-1 p-3 border rounded-md" id="pesan" name="pesan" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-full py-3 text-black">Ajukan Layanan</button>
            {{-- </form --}}
        </div>
    {{-- </div> --}}
@endsection
