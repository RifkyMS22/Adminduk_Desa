@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b border-gray-200">
    <h1 class="text-2xl font-semibold">Data Surat Keterangan Usaha</h1>
</div>
<div class="flex mb-4">
    <a href="/dashboard/create_usaha" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</a>
</div>
<div class="overflow-x-auto">
    <table class="min-w-full table-auto border">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nama Lengkap</th>
                <th class="py-2 px-4 border-b">NIK</th>
                <th class="py-2 px-4 border-b">No KK</th>
                <th class="py-2 px-4 border-b">Nama Ayah</th>
                <th class="py-2 px-4 border-b">Tempat Lahir</th>
                <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                <th class="py-2 px-4 border-b">Agama</th>
                <th class="py-2 px-4 border-b">Jenis Kelamin</th>
                <th class="py-2 px-4 border-b">Warganegara</th>
                <th class="py-2 px-4 border-b">Alamat</th>
                <th class="py-2 px-4 border-b">Pekerjaan</th>
                <th class="py-2 px-4 border-b">No Surat</th>
                <th class="py-2 px-4 border-b">Keperluan</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usaha as $usaha)
            <tr>
                <td class="py-2 px-4 border-b">{{ $usaha->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->nik }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->no_kk }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->binti }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->tmpt_lahir }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->tgl_lahir }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->agama }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->jenis_kelamin }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->warganegara }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->alamat }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->pekerjaan }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->no_surat }}</td>
                <td class="py-2 px-4 border-b">{{ $usaha->keperluan }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ url('/dashboard/usaha/administrasi/' . $usaha->id . '/edit') }}" class="text-yellow-500">
                        <i data-feather="edit" class="inline-block"></i>
                    </a>
                    <a href="{{ url('/dashboard/usaha/administrasi/' . $usaha->id) }}" class="text-red-500" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $usaha->id }}').submit();">
                        <i data-feather="x-circle" class="inline-block"></i>
                    </a>
                    <a href="{{ url('/dashboard/usaha/administrasi/export/' . $usaha->id) }}" class="text-blue-500" target="_blank">
                        <i data-feather="printer" class="inline-block"></i>
                    </a>
                    <form id="delete-form-{{ $usaha->id }}" action="{{ url('/dashboard/usaha/store' . $usaha->id) }}" method="POST" style="display: none;">
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
