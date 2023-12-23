@extends('dashboard.layouts-dashboard.app')

@section('content')
    <div class="flex justify-between items-center pt-3 pb-2 mb-3 border-b">
        <h1 class="text-2xl font-bold">Data Surat Keterangan Umum</h1>
    </div>
    <div class="flex items-center space-x-2 mb-4">
        <a href="{{ route('dashboard.keteranganumum.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah
        </a>
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
                    <th class="py-2 px-4 border-b">Warganegara</th>
                    <th class="py-2 px-4 border-b">Agama</th>
                    <th class="py-2 px-4 border-b">Pekerjaan</th>
                    <th class="py-2 px-4 border-b">Alamat</th>
                    <th class="py-2 px-4 border-b">Rt</th>
                    <th class="py-2 px-4 border-b">RW</th>
                    <th class="py-2 px-4 border-b">Berlaku</th>
                    <th class="py-2 px-4 border-b">No Surat</th>
                    <th class="py-2 px-4 border-b">Keterangan Lain</th>
                    <th class="py-2 px-4 border-b">Keperluan</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keteranganUmum as $keteranganUmum)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->nik }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->no_kk }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->jenis_kelamin }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->tmpt_lahir }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->tgl_lahir }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->warganegara }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->agama }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->pekerjaan }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->alamat }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->rt }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->rw }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->berlaku }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->no_surat }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->ket_lain }}</td>
                        <td class="py-2 px-4 border-b">{{ $keteranganUmum->keperluan }}</td>
                        <td class="border px-4 py-2 space-x-2">
                            <a href="{{ route('dashboard.keteranganumum.edit', ['keteranganUmum' => $keteranganUmum->id]) }}" class="badge bg-warning">
                                <i data-feather="edit"></i>
                            </a>
                            <a href="{{ route('dashboard.keteranganumum.destroy', ['keteranganUmum' => $keteranganUmum->id]) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $keteranganUmum->id }}').submit();">
                                <i data-feather="x-circle"></i>
                            </a>
                            <a href="{{ url('/dashboard/administrasi/umum/export/' . $keteranganUmum->id) }}" class="badge bg-primary" target="_blank">
                                <i data-feather="printer"></i>
                            </a>
                            <form id="delete-form-{{ $keteranganUmum->id }}" action="{{ route('dashboard.keteranganumum.destroy', ['keteranganUmum' => $keteranganUmum->id]) }}" method="POST" style="display: none;">
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
