@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Penduduk Desa Palar</h1>
</div>
<div class="btn-group">
  <a href="/creatependuduk" class="btn btn-primary active" aria-current="page">Tambah</a>
</div>

<div class="table-responsive small">
    <table class="table table-striped table-sm table-bordered">
      <thead>
        <tr>
          <th scope="col">NIK</th>
          <th scope="col">NO KK</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">RT</th>
          <th scope="col">RW</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Status Perkawinan</th>
          <th scope="col">Pendidikan</th>
          <th scope="col">Status Hubungan Keluarga</th>
          <th scope="col">Pekerjaan</th>
          <th scope="col">Agama</th>
          <th scope="col">No Akta Lahir</th>
          <th scope="col">No Akta Nikah</th>
          <th scope="col">Tanggal Nikah</th>
          <th scope="col">No Akta Cerai</th>
          <th scope="col">Tanggal Cerai</th>
          <th scope="col">NIK Ayah</th>
          <th scope="col">Nama Ayah</th>
          <th scope="col">NIK Ibu</th>
          <th scope="col">Nama Ibu</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataPenduduk as $penduduk)
          <tr>
            <td>{{ $penduduk->nik }}</td>
            <td>{{ $penduduk->no_kk }}</td>
            <td>{{ $penduduk->nama}}</td>
            <td>{{ $penduduk->alamat}}</td>
            <td>{{ $penduduk->rt}}</td>
            <td>{{ $penduduk->rw}}</td>
            <td>{{ $penduduk->tmpt_lahir}}</td>
            <td>{{ $penduduk->tgl_lahir}}</td>
            <td>{{ $penduduk->jns_kelamin}}</td>
            <td>{{ $penduduk->stts_kawin}}</td>
            <td>{{ $penduduk->pendidikan}}</td>
            <td>{{ $penduduk->stts_hub_keluarga }}</td>
            <td>{{ $penduduk->pekerjaan }}</td>
            <td>{{ $penduduk->agama }}</td>
            <td>{{ $penduduk->no_akta_lahir }}</td>
            <td>{{ $penduduk->no_akta_nikah}}</td>
            <td>{{ $penduduk->tgl_nikah }}</td>
            <td>{{ $penduduk->no_akta_cerai }}</td>
            <td>{{ $penduduk->tgl_cerai }}</td>
            <td>{{ $penduduk->nik_ayah }}</td>
            <td>{{ $penduduk->nama_ayah }}</td>
            <td>{{ $penduduk->nik_ibu }}</td>
            <td>{{ $penduduk->nama_ibu }}</td>
            <td>
              <a href="{{ route('dashboard.penduduk.edit', ['penduduk' => $penduduk->nik]) }}" class="badge bg-warning">
                <i data-feather="edit"></i>
              </a>
              <a href="{{ route('dashboard.penduduk.destroy', ['penduduk' => $penduduk->nik]) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                <i data-feather="x-circle"></i>
              </a>
              <form id="delete-form" action="{{ route('dashboard.penduduk.destroy', ['penduduk' => $penduduk->nik]) }}" method="POST" style="display: none;">
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
  <nav aria-label="Page navigation example">
    {{ $dataPenduduk->links('pagination::bootstrap-4') }}
  </nav>

  
@endsection
