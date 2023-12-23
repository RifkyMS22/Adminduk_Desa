@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-3 border-b">
    <h1 class="text-2xl font-semibold">Tambah Akta Kematian</h1>
</div>

    <div class="sm:flex justify-start">
        <div class="w-full sm:w-8/12">
            <form method="POST" action="{{ route('dashboard.kematian.store') }}">
                @csrf
                {{-- data pelapor --}}
                <div class="max-w-2xl mx-auto">
                    <div class="card border">
                        <div class="card-body">
                            <h5 class="mb-4 text-center">Data Pelapor</h5>
                    
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-3">
                                    <label for="nik_pelapor" class="col-form-label block">NIK</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nik_pelapor" id="nik_pelapor" class="form-input w-full">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="nama_pelapor" class="col-form-label block">Nama Lengkap</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nama_pelapor" id="nama_pelapor" class="form-input w-full">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="email_pelapor" class="col-form-label block">Email</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="email_pelapor" id="email_pelapor" class="form-input w-full">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="no_hp_pelapor" class="col-form-label block">Nomor Handphone</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="no_hp_pelapor" id="no_hp_pelapor" class="form-input w-full">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="no_kk_pelapor" class="col-form-label block">Nomor Kartu Keluarga</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="no_kk_pelapor" id="no_kk_pelapor" class="form-input w-full">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="warganegara_pelapor" class="col-form-label block">Kewarganegaraan</label>
                                </div>
                                <div class="col-span-9">
                                    <select id="warganegara_pelapor" class="form-select w-full" name="warganegara_pelapor" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="wni">Warga Negara Indonesia</option>
                                        <option value="wna">Warga Negara Asing</option>
                                    </select>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>

                {{-- Data bayi / anak --}}
                <div class="max-w-2xl mx-auto">
                    <div class="card border mt-6">
                        <div class="card-body">
                            <h5 class="mb-4 text-center">Data Bayi/Anak</h5>
                    
                            <div class="grid grid-cols-12 gap-3 items-center">
                                <div class="col-span-3">
                                    <label for="nik_bayi" class="col-form-label block">NIK</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="nik_bayi" id="nik_bayi" class="form-input">
                                </div>
                                <div class="form-check col-span-4">
                                    <input class="form-check-input" type="checkbox" value="" id="is_bayi">
                                    <label class="form-check-label" for="is_bayi">
                                        Bayi Belum Memiliki NIK
                                    </label>
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="nama_bayi" class="col-form-label block">Nama Lengkap</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nama_bayi" id="nama_bayi" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="warganegara_bayi" class="col-form-label block">Kewarganegaraan</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="warganegara_bayi" class="form-select" name="warganegara_bayi" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="wni">Warga Negara Indonesia</option>
                                        <option value="wna">Warga Negara Asing</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="kecamatan" class="col-form-label block">Kecamatan</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="kecamatan" id="kecamatan" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="kelurahan" class="col-form-label block">Desa / Kelurahan</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="kelurahan" id="kelurahan" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="jns_kelamin" class="col-form-label block">Jenis Kelamin</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="jns_kelamin" class="form-select" name="jns_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="male">Laki - Laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tmpt_dilahirkan" class="col-form-label block">Tempat Dilahirkan</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="tmpt_dilahirkan" class="form-select" name="tmpt_dilahirkan" required>
                                        <option value="">Pilih Tempat Dilahirkan</option>
                                        <option value="rs">Rumah Sakit / Bersalin</option>
                                        <option value="puskesmas">Puskesmas</option>
                                        <option value="polindes">Polindes</option>
                                        <option value="rumah">Rumah</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tmpt_kelahiran" class="col-form-label block">Tempat Kelahiran</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="tmpt_kelahiran" id="tmpt_kelahiran" class="form-input">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tgl_lahir" class="col-form-label block">Tanggal Lahir</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-input">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="jam" class="col-form-label block">Pukul</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="time" name="jam" id="jam" class="form-input">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="jns_kelahiran" class="col-form-label block">Jenis Kelahiran</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="jns_kelahiran" class="form-select" name="jns_kelahiran" required>
                                        <option value="">Pilih Jenis Kelahiran</option>
                                        <option value="tunggal">Tunggal</option>
                                        <option value="kembar2">Kembar Dua</option>
                                        <option value="kembar3">Kembar Tiga</option>
                                        <option value="kembar4">Kembar Empat</option>
                                        <option value="kembarbanyak">Kembar Banyak / Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="anak_ke" class="col-form-label block">Kelahiran Ke</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="number" name="anak_ke" id="anak_ke" class="form-input">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="penolong_lahir" class="col-form-label block">Penolong Kelahiran</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="penolong_lahir" class="form-select" name="penolong_lahir" required>
                                        <option value="">Pilih Penolong Kelahiran</option>
                                        <option value="dokter">Dokter</option>
                                        <option value="bidan">Bidan / Perawat</option>
                                        <option value="dukun">Dukun</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="brt_bayi" class="col-form-label block">Berat Bayi</label>
                                </div>
                                <div class="col-span-5">
                                    <div class="input-group mb-3 w-50">
                                        <input name="brt_bayi" id="brt_bayi" type="text" class="form-input">
                                        <span class="input-group-text" id="basic-addon2">Kg</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="pjg_bayi" class="col-form-label block">Panjang Bayi</label>
                                </div>
                                <div class="col-span-5">
                                    <div class="input-group mb-3 w-50">
                                        <input name="pjg_bayi" id="pjg_bayi" type="text" class="form-input">
                                        <span class="input-group-text" id="basic-addon2">Cm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- data saksi 1 --}}
                <div class="max-w-2xl mx-auto">
                    <div class="card border mt-6">
                        <div class="card-body">
                            <h5 class="mb-4 text-center">Data Saksi 1</h5>
                    
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-3">
                                    <label for="nik_s1" class="col-form-label block">NIK</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="nik_s1" id="nik_s1" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="nama_s1" class="col-form-label block">Nama Lengkap</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nama_s1" id="nama_s1" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="no_kk_s1" class="col-form-label block">Nomor Kartu Keluarga</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="no_kk_s1" id="no_kk_s1" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="warganegara_s1" class="col-form-label block">Kewarganegaraan</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="warganegara_s1" class="form-select" name="warganegara_s1" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="wni">Warga Negara Indonesia</option>
                                        <option value="wna">Warga Negara Asing</option>
                                    </select>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>

                {{-- data saksi 2 --}}
                <div class="max-w-2xl mx-auto">
                    <div class="card border mt-4">
                        <div class="card-body">
                            <h5 class="mb-4 text-center">Data Saksi 2</h5>
                    
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-3">
                                    <label for="nik_s2" class="col-form-label block">NIK</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="nik_s2" id="nik_s2" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="nama_s2" class="col-form-label block">Nama Lengkap</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nama_s2" id="nama_s2" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="no_kk_s2" class="col-form-label block">Nomor Kartu Keluarga</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="no_kk_s2" id="no_kk_s2" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="warganegara_s2" class="col-form-label block">Kewarganegaraan</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="warganegara_s2" class="form-select" name="warganegara_s2" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="wni">Warga Negara Indonesia</option>
                                        <option value="wna">Warga Negara Asing</option>
                                    </select>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
                

                {{-- Data orangtua --}}
                <div class="max-w-2xl mx-auto">
                    <div class="card border mt-4">
                        <div class="card-body">
                            <h5 class="mb-4 text-center">Data Orang Tua</h5>
                    
                            {{-- Data Ayah --}}
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-3">
                                    <label for="nik_ayah" class="col-form-label block">NIK Ayah</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="nik_ayah" id="nik_ayah" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="nama_ayah" class="col-form-label block">Nama Ayah</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tmpt_lahir_ayah" class="col-form-label block">Tempat Lahir Ayah</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="tmpt_lahir_ayah" id="tmpt_lahir_ayah" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tgl_lahir_ayah" class="col-form-label block">Tanggal Lahir Ayah</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="date" name="tgl_lahir_ayah" id="tgl_lahir_ayah" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="no_kk_ayah" class="col-form-label block">Nomor Kartu Keluarga</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="no_kk_ayah" id="no_kk_ayah" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="warganegara_ayah" class="col-form-label block">Kewarganegaraan</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="warganegara_ayah" class="form-select" name="warganegara_ayah" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="wni">Warga Negara Indonesia</option>
                                        <option value="wna">Warga Negara Asing</option>
                                    </select>
                                </div>
                            </div>
                    
                            {{-- Data Ibu --}}
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="nik_ibu" class="col-form-label block">NIK Ibu</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="nik_ibu" id="nik_ibu" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="name_ibu" class="col-form-label block">Nama Ibu</label>
                                </div>
                                <div class="col-span-9">
                                    <input type="text" name="nama_ibu" id="name_ibu" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tmpt_lahir_ibu" class="col-form-label block">Tempat Lahir Ibu</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="tmpt_lahir_ibu" id="tmpt_lahir_ibu" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="tgl_lahir_ibu" class="col-form-label block">Tanggal Lahir Ibu</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="date" name="tgl_lahir_ibu" id="tgl_lahir_ibu" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="no_kk_ibu" class="col-form-label block">Nomor Kartu Keluarga</label>
                                </div>
                                <div class="col-span-5">
                                    <input type="text" name="no_kk_ibu" id="no_kk_ibu" class="form-input">
                                </div>
                            </div>
                    
                            <div class="grid grid-cols-12 gap-3 mt-1">
                                <div class="col-span-3">
                                    <label for="warganegara_ibu" class="col-form-label block">Kewarganegaraan</label>
                                </div>
                                <div class="col-span-5">
                                    <select id="warganegara_ibu" type="text" class="form-select" name="warganegara_ibu" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="wni">Warga Negara Indonesia</option>
                                        <option value="wna">Warga Negara Asing</option>
                                    </select>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>

                <div class="flex gap-2 justify-end mt-4 mb-5">
                    <a href="{{ route('dashboard.adminduk.index') }}" class="btn-secondary py-2 px-4 rounded-full bg-gray-500 text-white">Kembali</a>
                    <button type="submit" class="btn-primary py-2 px-4 rounded-full bg-blue-500 text-white">Simpan</button>
                </div>
            </form>
        </div>
    </div>


<script>
    $('#is_bayi').on('change', function () {
        if(this.checked) {
            $('#nik_bayi').attr('disabled', '')
            $('#nik_bayi').val('')
        } else {
            $('#nik_bayi').removeAttr('disabled')
        }
    })
</script>
@endsection