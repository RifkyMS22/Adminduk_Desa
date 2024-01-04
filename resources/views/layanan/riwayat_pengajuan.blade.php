@extends('layouts.app')

@section('container')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Riwayat Pengajuan</h1>

        @if(count($riwayatPengajuan) > 0)
            <div class="-mx-4 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nama Pemohon</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">NIK</th>
                            <th class="py-2 px-4 border-b">Jenis Pengajuan</th>
                            <th class="py-2 px-4 border-b">Pesan</th>
                            <th class="py-2 px-4 border-b">Status</th>
                            <th class="py-2 px-4 border-b">Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($riwayatPengajuan as $pengajuan)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->nama_pemohon }}</td>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->email }}</td>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->nik }}</td>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->jenis_pengajuan }}</td>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->pesan }}</td>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->status }}</td>
                                <td class="py-2 px-4 border-b">{{ $pengajuan->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">Belum ada pengajuan.</p>
        @endif

        <a href="{{ route('layanan.index') }}" class="btn btn-primary mt-6">Kembali ke Halaman Layanan</a>
    </div>
@endsection
