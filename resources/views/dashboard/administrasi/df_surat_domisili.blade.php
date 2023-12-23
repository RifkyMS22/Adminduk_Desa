@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl">Data Surat Keterangan Domisili</h1>
</div>

<div class="flex items-center mb-4">
    <a href="{{ route('dashboard.administrasi.create_domisili') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</a>
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
            @foreach ($domisili as $domisili)
            <tr>
                <td class="py-2 px-4 border-b">{{ $domisili->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->nik }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->no_kk }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->binti }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->tmpt_lahir }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->tgl_lahir }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->agama }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->jenis_kelamin }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->warganegara }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->alamat }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->pekerjaan }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->no_surat }}</td>
                <td class="py-2 px-4 border-b">{{ $domisili->keperluan }}</td>
                <td class="py-2 px-4 border-b">
                    <form action="{{ url('/dashboard/administrasi/' . $domisili->id . '/edit') }}" method="GET" class="inline">
                        <button type="submit" class="btn btn-warning">
                            <i data-feather="edit"></i>
                        </button>
                    </form>
                
                    <form action="{{ url('/dashboard/administrasi/' . $domisili->id) }}" method="POST" class="inline" onsubmit="event.preventDefault(); document.getElementById('delete-form-{{ $domisili->id }}').submit();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i data-feather="x-circle"></i>
                        </button>
                    </form>
                
                    <form action="{{ url('/dashboard/administrasi/domisili/export/' . $domisili->id) }}" method="GET" class="inline" target="_blank">
                        <button type="submit" class="btn btn-primary">
                            <i data-feather="printer"></i>
                        </button>
                    </form>
                
                    <form id="delete-form-{{ $domisili->id }}" action="{{ url('/dashboard/administrasi/' . $domisili->id) }}" method="POST" style="display: none;">
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
