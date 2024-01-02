@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl">Data Surat Keterangan Pindah</h1>
</div>

<div class="flex items-center mb-4">
    <a href="{{ route('dashboard.pindah.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md">Tambah</a>
</div>

<div class="overflow-x-auto">
    <table class="w-full mx-auto table-auto border">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nama Lengkap</th>
                <th class="py-2 px-4 border-b">NIK</th>
                <th class="py-2 px-4 border-b">No KK</th>
                {{-- <th class="py-2 px-4 border-b">Klasifikasi Pindah</th> --}}
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pindah as $pindah)
            <tr>
                <td class="py-2 px-4 border-b">{{ $pindah->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $pindah->nik }}</td>
                <td class="py-2 px-4 border-b">{{ $pindah->no_kk }}</td>
                {{-- <td class="py-2 px-4 border-b">{{ $pindah->kls_pindah }}</td> --}}
                <td class="py-2 px-4 border-b">
                    <form action="{{ url('/dashboard/pindah/' . $pindah->id . '/edit') }}" method="GET" class="inline">
                        <button type="submit" class="btn btn-warning">
                            <i data-feather="edit"></i>
                        </button>
                    </form>
                
                    <form action="{{ url('/dashboard/pindah/delete/' . $pindah->id) }}" method="POST" class="inline" onsubmit="event.preventDefault(); document.getElementById('delete-form-{{ $pindah->id }}').submit();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i data-feather="x-circle"></i>
                        </button>
                    </form>
                
                    <form action="{{ url('/dashboard/pindah/export/' . $pindah->id) }}" method="GET" class="inline" target="_blank">
                        <button type="submit" class="btn btn-primary">
                            <i data-feather="printer"></i>
                        </button>
                    </form>
                
                    <form id="delete-form-{{ $pindah->id }}" action="{{ url('/dashboard/pindah/' . $pindah->id) }}" method="POST" style="display: none;">
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
