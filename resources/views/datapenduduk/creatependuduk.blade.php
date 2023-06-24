@extends('layouts.app')

@section('container')

<form action="{{ route('datapenduduk.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
    </div>
    <!-- Tambahkan input lain sesuai kebutuhan -->
    <button type="submit">Simpan</button>
</form>


@endsection