@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 shadow-md rounded-md w-96">
        <h2 class="text-2xl font-bold mb-4">Formulir Pengaduan</h2>
        <form action="{{ route('pengaduan.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="pengaduan" class="block text-sm font-medium text-gray-600">Isi Pengaduan</label>
                <textarea id="pengaduan" name="pengaduan" rows="4" class="mt-1 p-2 w-full border rounded-md" required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Kirim Pengaduan</button>
        </form>
    </div>
</div>
@endsection
