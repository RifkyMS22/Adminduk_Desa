@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl">Akta Kematian Desa Palar</h1>
</div>
<div class="btn-group">
    <a href="{{ route('dashboard.kematian.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Tambah
    </a>
</div>

<div class="mt-4">
    <table class="table-auto w-full">
        <thead>
            <tr class="border-b">
                <th class="px-4 py-2 border-r">Nama Bayi</th>
                <th class="px-4 py-2 border-r">Nik Bayi</th>
                <th class="px-4 py-2 border-r">Warganegara Bayi</th>
                <th class="px-4 py-2 border-r">Tempat Di Lahirkan</th>
                <th class="px-4 py-2 border-r">Tempat Kelahiran</th>
                <th class="px-4 py-2 border-r">Tanggal</th>
                <th class="px-4 py-2 border-r">Pukul</th>
                <th class="px-4 py-2 border-r">Jenis Kelamin</th>
                <th class="px-4 py-2 text-center">Aksi</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach($kematian as $kematian)
                <tr>
                    <td class="px-4 py-2">{{ $kematian->nama_bayi }}</td>
                    <td class="px-4 py-2">{{ $kematian->nik_bayi }}</td>
                    <td class="px-4 py-2">{{ $kematian->warganegara_bayi }}</td>
                    <td class="px-4 py-2">{{ $kematian->tmpt_dilahirkan }}</td>
                    <td class="px-4 py-2">{{ $kematian->tmpt_kelahiran }}</td>
                    <td class="px-4 py-2">{{ $kematian->tgl_lahir }}</td>
                    <td class="px-4 py-2">{{ $kematian->jam }}</td>
                    <td class="px-4 py-2">{{ $kematian->jns_kelamin }}</td>
                    <td class="px-4 py-2 text-center">
                        <div class="btn-group" role="group">
                            <a href="{{ url('/dashboard/adminduk/' . $kematian->id . '/edit') }}"
                                class="btn btn-warning">
                                <i data-feather="edit"></i>
                            </a>
                            <a href="{{ url('/dashboard/adminduk/export/' . $kematian->id) }}"
                                class="btn btn-primary" target="_blank">
                                <i data-feather="printer"></i>
                            </a>
                            <a href="{{ url('/dashboard/adminduk/' . $kematian->id) }}"
                                class="btn btn-danger"
                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $kematian->id }}').submit();">
                                <i data-feather="x-circle"></i>
                            </a>
                        </div>
                        <form id="delete-form-{{ $kematian->id }}"
                            action="{{ url('/dashboard/adminduk/' . $kematian->id) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
