@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelahiran Anak Desa Palar</h1>
</div>
<div class="btn-group">
    <a href="{{ route('dashboard.adminduk.create_kelahiran') }}" class="btn btn-primary active"
        aria-current="page">Tambah</a>
</div>
<div class="table-responsive small mt-4">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Nama Bayi</th>
                <th scope="col">Nik Bayi</th>
                <th scope="col">Warganegara Bayi</th>
                <th scope="col">Tempat Di Lahirkan</th>
                <th scope="col">Tempat Kelahiran</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Pukul</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelahiran as $kelahiran)
                <tr>
                    <td>{{ $kelahiran->nama_bayi }}</td>
                    <td>{{ $kelahiran->nik_bayi }}</td>
                    <td>{{ $kelahiran->warganegara_bayi }}</td>
                    <td>{{ $kelahiran->tmpt_dilahirkan }}</td>
                    <td>{{ $kelahiran->tmpt_kelahiran }}</td>
                    <td>{{ $kelahiran->tgl_lahir }}</td>
                    <td>{{ $kelahiran->jam }}</td>
                    <td>{{ $kelahiran->jns_kelamin }}</td>
                    <td width="100">
                        <div class="btn-group" role="group">
                            <a href="{{ url('/dashboard/adminduk/' . $kelahiran->id . '/edit') }}"
                                class="btn btn-sm btn-warning">
                                <i data-feather="edit"></i>
                            </a>
                            <a href="{{ url('/dashboard/adminduk/export/' . $kelahiran->id) }}"
                                class="btn btn-primary btn-sm" target="_blank">
                                <i data-feather="printer"></i>
                            </a>
                            <a href="{{ url('/dashboard/adminduk/' . $kelahiran->id) }}"
                                class="btn btn-danger btn-sm"
                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $kelahiran->id }}').submit();">
                                <i data-feather="x-circle"></i>
                            </a>
                        </div>
                        <form id="delete-form-{{ $kelahiran->id }}"
                            action="{{ url('/dashboard/adminduk/' . $kelahiran->id) }}"
                            method="POST" style="display: none;">
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
