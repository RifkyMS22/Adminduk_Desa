@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Daftar Pengaduan</h2>

    @if($pengaduans->isEmpty())
        <p>Tidak ada pengaduan yang tersedia.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        {{-- <th class="py-2 px-4 border border-gray-300">Nama</th>
                        <th class="py-2 px-4 border border-gray-300">Email</th> --}}
                        <th class="py-2 px-4 border border-gray-300">Isi Pengaduan</th>
                        <th class="py-2 px-4 border border-gray-300">Lampiran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduans as $pengaduan)
                        <tr>
                            {{-- <td class="py-2 px-4 border border-gray-300">{{ $pengaduan->nama }}</td>
                            <td class="py-2 px-4 border border-gray-300">{{ $pengaduan->email }}</td> --}}
                            <td class="py-2 px-4 border border-gray-300">{{ $pengaduan->pengaduan }}</td>
                            <td class="py-2 px-4 border border-gray-300 text-center">
                                <a href="{{ asset('storage/gambar/' . $pengaduan->gambar) }}" class="lightbox" style="width: 10px; height: 10px;">
                                    <img src="{{ asset('storage/gambar/' . $pengaduan->gambar) }}" class="mx-auto max-w-full w-50vw h-20" alt="">
                                </a>    
                            </td>                                                                    
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
<!-- Panggil setelah DOM selesai dimuat -->
<script>
    $(document).ready(function () {
        baguetteBox.run('.lightbox', { animation: 'slideIn' });
        
    });
</script>


@endsection
