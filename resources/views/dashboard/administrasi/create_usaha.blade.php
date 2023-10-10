@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Surat Keterangan Usaha</h1>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('dashboard.usaha.store') }}">
                            @csrf

                            <form action="/proses-form" method="POST">
                                @csrf
                            
                                <label for="nik">NIK:</label>
                                <input type="text" name="nik" id="nik" required>
                            
                            
                            

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('dashboard.penduduk.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection