@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <h2>Tambah Berita</h2>
    <form action="{{ url('/dashboard/berita/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Berita:</label>
            <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Unggah Gambar (opsional):</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/jpeg, image/png, image/gif">
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Berita</button>
    </form>
</div>
@endsection