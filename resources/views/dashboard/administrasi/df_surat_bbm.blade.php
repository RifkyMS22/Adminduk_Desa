@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b border-gray-200">
    <h1 class="text-2xl">Data Surat Rekomendasi BBM</h1>
</div>

<div class="flex items-center mb-4">
    <a href="/dashboard/create_bbm" class="mr-auto bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</a>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full table-auto border">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nama</th>
                <th class="py-2 px-4 border-b">NIK</th>
                <th class="py-2 px-4 border-b">No KK</th>
                <th class="py-2 px-4 border-b">Jenis Kelamin</th>
                <th class="py-2 px-4 border-b">Tempat Lahir</th>
                <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                <th class="py-2 px-4 border-b">Pekerjaan</th>
                <th class="py-2 px-4 border-b">Alamat</th>
                <th class="py-2 px-4 border-b">Alamat Usaha</th>
                <th class="py-2 px-4 border-b">Konsumen Pengguna</th>
                <th class="py-2 px-4 border-b">Jenis Usaha</th>
                <th class="py-2 px-4 border-b">No Surat</th>
                <th class="py-2 px-4 border-b">Jenis BBM</th>
                <th class="py-2 px-4 border-b">Masa Berlaku</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekomendasiBbm as $rekomendasiBbm)
            <tr>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->nama }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->nik }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->no_kk }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->jenis_kelamin }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->tmptlahir }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->tgl_lahir }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->pekerjaan }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->alamat }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->alamat_usaha }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->konsumen_pengguna }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->jns_usaha }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->no_surat }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->jns_bbm }}</td>
                <td class="px-6 py-4 border-b">{{ $rekomendasiBbm->masa_berlaku }}</td>
                <td class="px-6 py-4 border-b space-x-2">
                    <a href="{{ url('/dashboard/bbm/administrasi/' . $rekomendasiBbm->id . '/edit') }}" class="text-yellow-500 hover:text-yellow-700">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="{{ url('/dashboard/bbm/administrasi/' . $rekomendasiBbm->id) }}" class="text-red-500 hover:text-red-700" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $rekomendasiBbm->id }}').submit();">
                        <i data-feather="x-circle"></i>
                    </a>
                    <a href="{{ url('/dashboard/administrasi/domisili/export/' . $rekomendasiBbm->id) }}" class="text-blue-500 hover:text-blue-700">
                        <i data-feather="printer"></i>
                    </a>
                    <form id="delete-form-{{ $rekomendasiBbm->id }}" action="{{ url('/dashboard/bbm/administrasi/' . $rekomendasiBbm->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
            <script>
                feather.replace()
            </script>
        </tbody>
    </table>
</div>
@endsection
