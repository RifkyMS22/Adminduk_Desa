@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="h-screen bg-white p-4 rounded-xl overflow-x-auto"> 
<div class="w-full flex justify-between flex-wrap items-center  pb-2 mb-3 border-b">
  <h1 class="text-2xl font-semibold">Data Penduduk Desa Palar</h1>

  <form action="{{ route('dashboard.penduduk.index') }}" method="get" class="mb-2">
    <div class="flex items-center">
      <input type="text" name="search" placeholder="Cari penduduk" class="border  mr-2">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Cari
      </button>
    </div>
  </form>
</div>


<div class="mb-4">
  <a href="/creatependuduk" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Tambah
  </a>
</div>

<div class="bg-white p-4 rounded-xl overflow-x-auto"> 
      <div class=" border-b border-gray-200 rounded-lg">
        <table class="w-full divide-gray-800">
        <thead>
          <tr>
            <th class="border  ">NIK</th>
            <th class="border  ">NO KK</th>
            <th class="border  ">Nama</th>
            <th class="border  ">Alamat</th>
            <th class="border  ">RT</th>
            <th class="border  ">RW</th>
            {{-- <th class="border  ">Tempat Lahir</th>
            <th class="border  ">Tanggal Lahir</th>
            <th class="border  ">Jenis Kelamin</th>
            <th class="border  ">Status Perkawinan</th>
            <th class="border  ">Pendidikan</th>
            <th class="border  ">Status Hubungan Keluarga</th>
            <th class="border  ">Pekerjaan</th>
            <th class="border  ">Agama</th>
            <th class="border  ">No Akta Lahir</th>
            <th class="border  ">No Akta Nikah</th>
            <th class="border  ">Tanggal Nikah</th>
            <th class="border  ">No Akta Cerai</th>
            <th class="border  ">Tanggal Cerai</th>
            <th class="border  ">NIK Ayah</th>
            <th class="border  ">Nama Ayah</th>
            <th class="border  ">NIK Ibu</th>
            <th class="border  ">Nama Ibu</th> --}}
            <th class="border  ">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataPenduduk as $penduduk)
            <tr>
              <td class="border ">{{ $penduduk->nik }}</td>
              <td class="border ">{{ $penduduk->no_kk }}</td>
              <td class="border ">{{ $penduduk->nama}}</td>
              <td class="border ">{{ $penduduk->alamat}}</td>
              <td class="border ">{{ $penduduk->rt}}</td>
              <td class="border ">{{ $penduduk->rw}}</td>
              {{-- <td class="border ">{{ $penduduk->tmpt_lahir}}</td>
              <td class="border ">{{ $penduduk->tgl_lahir}}</td>
              <td class="border ">{{ $penduduk->jns_kelamin}}</td>
              <td class="border ">{{ $penduduk->stts_kawin}}</td>
              <td class="border ">{{ $penduduk->pendidikan}}</td>
              <td class="border ">{{ $penduduk->stts_hub_keluarga }}</td>
              <td class="border ">{{ $penduduk->pekerjaan }}</td>
              <td class="border ">{{ $penduduk->agama }}</td>
              <td class="border ">{{ $penduduk->no_akta_lahir }}</td>
              <td class="border ">{{ $penduduk->no_akta_nikah}}</td>
              <td class="border ">{{ $penduduk->tgl_nikah }}</td>
              <td class="border ">{{ $penduduk->no_akta_cerai }}</td>
              <td class="border ">{{ $penduduk->tgl_cerai }}</td>
              <td class="border ">{{ $penduduk->nik_ayah }}</td>
              <td class="border ">{{ $penduduk->nama_ayah }}</td>
              <td class="border ">{{ $penduduk->nik_ibu }}</td>
              <td class="border ">{{ $penduduk->nama_ibu }}</td> --}}
              <td class="border ">
                <a href="{{ url('/dashboard/penduduk/' . $penduduk->nik . '/edit') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                  <i data-feather="edit" class="inline-block"></i>
                </a>
                <a href="{{ url('/dashboard/penduduk/' . $penduduk->nik) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $penduduk->nik }}').submit();">
                  <i data-feather="x-circle" class="inline-block"></i>
                </a>
                <form id="delete-form-{{ $penduduk->nik }}" action="{{ url('/dashboard/penduduk/' . $penduduk->nik) }}" method="POST" style="display: none;">
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
</div>
</div>


<div class="mt-4">
  {{ $dataPenduduk->links('pagination::tailwind') }}
</div>

@endsection
