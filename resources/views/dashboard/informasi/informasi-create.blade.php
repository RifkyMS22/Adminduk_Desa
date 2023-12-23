@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Tambah Informasi</h2>

    <form action="{{ route('dashboard.informasi.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-600">Judul</label>
            <input type="text" id="judul" name="judul" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" class="mt-1 p-2 w-full border rounded-md" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Tambah Informasi</button>
    </form>
</div>

@endsection
