@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="container mt-5">
    <h2 class="text-2xl">Tambah Berita</h2>
    <form action="{{ url('/dashboard/berita/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block text-sm font-semibold text-gray-600">Judul:</label>
            <input type="text" class="form-input mt-1 block w-full" id="judul" name="judul" required>
        </div>
        <div class="mb-4">
            <label for="isi" class="block text-sm font-semibold text-gray-600">Isi Berita:</label>
            <textarea class="form-textarea mt-1 block w-full" id="isi" name="isi" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="gambar" class="block text-sm font-semibold text-gray-600">Unggah Gambar (opsional):</label>
            <input type="file" class="form-input mt-1 block w-full" id="gambar" name="gambar" accept="image/jpeg, image/png, image/gif">
        </div>
        
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Berita</button>
    </form>
</div>
@endsection
