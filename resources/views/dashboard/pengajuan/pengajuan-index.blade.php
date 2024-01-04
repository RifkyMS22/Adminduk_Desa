@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="bg-white p-4 rounded-xl">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Daftar Pengajuan Layanan</h2>
    </div>

    @if(session('success'))
        <div class="bg-green-200 border-green-500 text-green-700 border-l-4 p-4 mb-4" role="alert">
            <p class="font-bold">Success!</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if($pengajuan->isEmpty())
        <p class="text-gray-600">Tidak ada pengajuan layanan saat ini.</p>
    @else
        <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden mt-4">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b">No.</th>
                    <th class="py-2 px-4 border-b">Nama Pemohon</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Jenis Pengajuan</th>
                    <th class="py-2 px-4 border-b">Pesan</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengajuan as $item)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $item->nama_pemohon }}</td>
                        <td class="py-2 px-4 border-b">{{ $item->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $item->jenis_pengajuan }}</td>
                        <td class="py-2 px-4 border-b">{{ $item->pesan }}</td>
                        <td class="py-2 px-4 border-b">
                            @if($item->status == 'dalam proses')
                                <form action="{{ route('dashboard.pengajuan.updateStatus', $item->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="bg-green-500 text-white py-1 px-2 rounded-md">Proses</button>
                                </form>
                            @else
                                {{ $item->status }}
                            @endif
                        </td>
                        
                        <td class="py-2 px-4 border-b">
                            <!-- Tambahkan tombol hapus jika diperlukan -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
