@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Daftar Informasi</h2>

    <a href="{{ route('dashboard.informasi.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mb-4">Tambah Informasi</a>

    @if($informasi->isEmpty())
        <p>Tidak ada informasi yang tersedia.</p>
    @else
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border border-gray-300">Judul</th>
                    <th class="py-2 px-4 border border-gray-300">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informasi as $info)
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">{{ $info->judul }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $info->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>


@endsection
