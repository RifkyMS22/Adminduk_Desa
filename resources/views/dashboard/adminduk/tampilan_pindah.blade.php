<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Atur gaya CSS sesuai kebutuhan Anda */
        @page {
        size: landscape;
    }

    body {
        width: 100vw;
        
         /* Menggunakan height (100vh) untuk lebar agar sesuai dalam orientasi landscape */
    }

        /* .container {
            margin-right: 2%;
            margin-left: 1%;
        } */
        .box {
            width: 18px;
            height: 16px;
            border: 0.5px solid #000;
            text-align: center;
            /* margin: 0px; Sesuaikan dengan margin yang diinginkan */
            font-size: 10px;
            display: inline-block; /* Tambahkan ini untuk membuat kotak berjejer secara horizontal */
        }

        hr {
            border: 1px solid #000000;
            width: 100%;
        }

        .title-box {
            border: 0.5px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 250px;
            height: 14px;
        }

        .title-box-isi {
            border: 0.5px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 500px;
            height: 14px;
        }
        .title-box-isi-1 {
            border: 0.5px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 650px;
            height: 14px;
        }

        .title-box-isi-panjang {
            border: 0.5px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 970px;
            height: 14px;
        }

        /* Style untuk teks judul */
        .title-text {
            font-size: 9px;
            /* font-weight: bold; */
            color: #000000;
        }

        .title-text-isi {
            font-size: 9px;
            /* font-weight: bold; */
            color: #000000;
        }
        .box-isi {
            border: 0.5px solid #000000;
            text-align: center;
            width: 16px;
            height: 14px;
        }
        .box-isi-no {
            border: 0.5px solid #000000;
            text-align: center;
            background-color: gray;
            width: 37px;
            height: 14px;
            margin-left: 30px;
        }
        .box-isi-nik {
            border: 0.5px solid #000000;
            text-align: center;
            background-color: gray;
            width: 310px;
            height: 14px;
        }
        .box-isi-nl {
            border: 0.5px solid #000000;
            text-align: center;
            
            width: 650px;
            height: 14px;
        }
        .td-input {
            display: flex;
            flex-direction: row;
        }
        @font-face {
        font-family: 'Wingdings';
        src: url('{{ public_path('fonts/wingdings.ttf') }}') format('truetype');
    }

    .checkmark {
        font-family: 'Wingdings';
    }
        @media print {
            @page {
                size: landscape;
            }
        }
    </style>

</head>
<body>

        <table width="100%" style="margin-top: -29px;">
            <tr>
                <td style="text-align: center; font-size: 12px; font-weight: bold;">
                    <div>FORMULIR PENDAFTARAN PERPINDAHAN PENDUDUK</div>
                </td>
                <td style="text-align: right;">
                    <div style="border: 1px solid #000; font-size: 8px; font-weight: bold;">F-2.01</div>
                </td>                            
            </tr>
        </table>
    
    <div style="margin-top: -4px;">
        <hr style="margin-top: -10px;">
    </div>
    <div style="margin-top: -8px;">
        <table width="100%">
            <tr>
                <td style="text-align: left; font-size: 9px; font-weight: bold;">
                    <div style="margin-top: -10px;">Perhatian :</div>
                </td>
                <td style="text-align: right;">
                    <div style="display: flex; justify-content: flex-end; margin-top: -10px; font-size: 8px; font-weight: bold;">
                        alamat email
                    </div>
                </td>                                 
            </tr>
        </table>
    </div>
    <div style="margin-top: 3px;">
        <table width="100%">
            <tr>
                <td style="text-align: left; font-size: 9px; font-weight: bold;">
                    <div style="margin-top: -10px;">Harap diisi dengan huruf cetak dan menggunakan tinta hitam</div>
                </td>                
            </tr>
        </table>        
    </div>
    <div>
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">1. No KK</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi">
                    <div class="title-text-isi">{{ $pindah->no_kk }}</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">2. Nama Lengkap Pemohon</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-panjang">
                    <div class="title-text-isi">{{ $pindah->nama }}</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">3. NIK</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi">
                    <div class="title-text-isi">{{ $pindah->nik }}</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">4. Jenis Permohonan</div>
                </td>
                <td style="width: 20px;">
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td style="white-space: nowrap;">
                    <div class="title-text-isi">D. SURAT KETERANGAN KEPENDUDUKAN</div>
                </td>
            </tr>            
        </table>
    </div>  
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td style="padding-left: 292px;"></td> <!-- Kolom kosong untuk menyesuaikan struktur tabel -->
                <td></td> <!-- Kolom kosong untuk menyesuaikan struktur tabel -->
                <td></td> <!-- Kolom kosong untuk menyesuaikan struktur tabel -->
                <td class="box-isi">
                    <div class="title-text-isi">V</div>
                </td>
                <td>
                    <div class="title-text-isi">Surat Keterangan Pindah</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi">Surat Keterangan Pindah Luar Negeri (SKPLN)</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi">Surat Keterangan Tempat Tinggal (SKTT)</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="title-text-isi">Bagi Orang Asing Tinggal Terbatas</div>
                </td>
            </tr>
        </table>
    </div> 
    
    <div style="margin-top: 1px;">
    <table>
        <tr>
            <td class="title-box">
                <div class="title-text">5. Alamat Asal</div>
            </td>
            <td>
                <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
            </td>
            <td class="title-box-isi-1">
                <div class="title-text-isi">{{ $pindah->almt_asal }}</div>
            </td>
            <td>
                <div style="margin-left: 50px;" class="title-text">RT </div>
            </td>
            <td>
                <td>
                    <div class="td-input">
                        <?= generateDivBoxes(3, $pindah->rt); ?>
                    </div>
                </td>           
            </td>
            <td>
                <div style="margin-left: 50px;" class="title-text">RW </div>
            </td>
            <td>
                <div class="td-input">
                    <?= generateDivBoxes(3, $pindah->rw); ?>
                </div>
            </td>
        </tr>
        
    </table>
    </div>

    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:280px; margin-right:30px;">a. Desa/Kelurahan</div>
                    <td class="title-box">
                        <div class="title-text">{{ $pindah->desa }}</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">b. Kecamatan</div>
                    <td class="title-box">
                        <div class="title-text">{{ $pindah->kecamatan }}</div>
                    </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:280px; margin-right:30px;">c. Kabupaten/Kota</div>
                    <td class="title-box">
                        <div class="title-text">{{ $pindah->kabupaten }}</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">d. Provinsi</div>
                    <td class="title-box">
                        <div class="title-text">{{ $pindah->provinsi }}</div>
                    </td>
                    </td>
                </td>
            </tr>
            
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:280px; margin-right:30px; margin-top:-1px;">e. Kode pos</div>
                    <td class="td-input" style="display: flex; ">
                        <?= generateDivBoxes(5, $pindah->kd_pos); ?>
                    </td>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: -1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">6. Klasifikasi Kepindahan</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">
                        {!! in_array('1', $pindah->kls_pindah) ? 'V' : '' !!}
                    </div>
                </td>
                <td>
                    <div class="title-text-isi">Dalam satu desa/kelurahan atau yang disebut dengan nama lain</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="box-isi"> 
                    <div class="title-text-isi">
                        {!! in_array('2', $pindah->kls_pindah) ? 'V' : '' !!}
                    </div>
                </td>
                <td>
                    <div class="title-text-isi">Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi">
                        {!! in_array('3', $pindah->kls_pindah) ? 'V' : '' !!}
                    </div>
                </td>
                <td>
                    <div class="title-text-isi">Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi">
                        {!! in_array('4', $pindah->kls_pindah) ? 'V' : '' !!}
                    </div>
                </td>
                <td>
                    <div class="title-text-isi">Antar kabupaten/kota dalam satu provinsi</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi">
                        {!! in_array('5', $pindah->kls_pindah) ? 'V' : '' !!}
                    </div>
                </td>
                <td>
                    <div class="title-text-isi">Antar provinsi</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">7. Alamat Pindah </div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi">{{ $pindah->alamat_pindah }}</div>
                </td>
                <td>
                    <div style="margin-left: 50px;" class="title-text">RT </div>
                </td>
                <td>
                    <td>
                        
                            <?= generateDivBoxes(3, $pindah->rt_pindah); ?>
                        
                    </td>           
                </td>
                <td>
                    <div style="margin-left: 50px;" class="title-text">RW </div>
                </td>
                <td>
                    
                        <?= generateDivBoxes(3, $pindah->rw_pindah); ?>
                    
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:280px; margin-right:30px;">a. Desa/Kelurahan</div>
                    <td class="title-box">
                        <div class="title-text"></div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">b. Kecamatan</div>
                    <td class="title-box">
                        <div class="title-text"></div>
                    </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:280px; margin-right:30px;">c. Kabupaten/Kota</div>
                    <td class="title-box">
                        <div class="title-text">{{ $pindah->kota_pindah }}</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">d. Provinsi</div>
                    <td class="title-box">
                        <div class="title-text">{{ $pindah->provinsi_pindah }}</div>
                    </td>
                    </td>
                </td>
            </tr>
            
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:280px; margin-right:30px; margin-top:-1px;">e. Kode pos</div>
                    <td class="td-input" style="display: flex; ">
                        <?= generateDivBoxes(5, $pindah->kd_pos_pindah); ?>
                    </td>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">8. Alasan Pindah</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->alasan_pindah === 'Pekerjaan' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi"  style="margin-right: 15px;">Pekerjaan</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->alasan_pindah === 'Keamanan' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Keamanan</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->alasan_pindah === 'Perumahan' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Perumahan</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi">Lainnya (sebutkan)</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->alasan_pindah === 'Pendidikan' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Pendidikan</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->alasan_pindah === 'Kesehatan' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Kesehatan</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->alasan_pindah === 'Keluarga' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Keluarga</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi">.......................</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">9. Jenis Kepindahan</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->jns_kepindahan === 'kepala keluarga' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 30px;">Kepala Keluarga</div>
                </td>
                <td></td>
                <td style="width: 10px;">
                    <div class="title-text"></div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"><div class="title-text-isi">{{ $pindah->jns_kepindahan === 'kep. kel. dan seluruh angg. keluarga' ? 'V' : '' }}</div></div>
                </td>
                <td>
                    <div class="title-text-isi">Kepala Keluarga dan Sebagian Anggota Keluarga</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="title-text"></div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text"></div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"><div class="title-text-isi">{{ $pindah->jns_kepindahan === 'kep. kel. dan sbg. angg. keluarga' ? 'V' : '' }}</div></div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 30px;">Kepala Keluarga dan Sebagian Anggota Keluarga</div>
                </td>
                <td></td>
                <td style="width: 10px;">
                    <div class="title-text"></div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->jns_kepindahan === 'anggota keluarga' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi">Anggota Keluarga</div>
                </td>
            </tr>
            
        </table>        
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">10. Anggota Keluarga Tidak Pindah</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->aggt_tdk_pindah === 'Numpang KK' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Numpang KK</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->aggt_tdk_pindah === 'Membuat KK Baru' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Membuat KK baru</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->aggt_tdk_pindah === 'Nomor KK Tetap' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi">Nomor KK tetap</div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">11. Anggota Keluarga Yang Pindah</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->aggt_pindah === 'Numpang KK' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Numpang KK</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->aggt_pindah === 'Membuat KK baru' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 15px;">Membuat KK baru</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">{{ $pindah->aggt_pindah === 'Nomor KK Tetap' ? 'V' : '' }}</div>
                </td>
                <td>
                    <div class="title-text-isi">Nomor KK tetap</div>
                </td>
            </tr>
        </table>                
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">12. Daftar Anggota Keluarga yang Pindah</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td>
                    <div style="margin-left: 23px;">
                        
                    </div>
                </td>
                <td class="box-isi-no" style="margin-left: 25px;">
                    <div class="title-text-isi">NO</div>
                </td>                
                <td>
                    <div style="margin-left: 20px;" class="box-isi-nik">
                        <div class="title-text-isi">NIK</div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px; background-color: gray;" class="box-isi-nl">
                        <div class="title-text-isi">NAMA LENGKAP</div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="box-isi-no">
                        <div class="title-text-isi">SHDK</div>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -4px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: -8px;">
        <table>
            <tr>
                <td>
                <div class="td-input" style="margin-left: 25px;">
                    <?= generateDivBoxes(2, ''); ?>
                </div>
            </td>
                <td>
                    <div style="margin-left: 23px;" class="td-input">
                        <?= generateDivBoxes(16, ''); ?>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 24px;" class="box-isi-nl">
                        <div class="title-text-isi"></div>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 20px;" class="td-input">
                        <?= generateDivBoxes(2, ''); ?>
                    </div>
                </td>
            </tr>
        </table>        
    </div>

    <div style="margin-top: 1px;">
        <div style="text-align: left; font-size: 8px; font-weight: bold;"> Diisi oleh Penduduk (Orang Asing) pemegang ITAS yang Mengajukan SKTT dan OA Pemegang ITAP yang Mengajukan Surat Keterangan Kependudukan Lainnya</div>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">13. Nama Sponsor</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi"></div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">14. Tipe Sponsor</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 50px;">Organisasi Internasional</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 50px;">Pemerintah</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi">Perusahaan</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi">Perorangan</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text-isi" style="margin-right: 50px;">Tanpa Sponsor</div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">15. Alamat Sponsor</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi"></div>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <div class="title-text"></div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi"></div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">16. Nomor dan Tanggal KITAS & KITAP</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td>
                    <div style="margin-left: 5px;">    
                    <td class="td-input" style="display: flex; ">
                        <?= generateDivBoxes(12, ''); ?>
                    </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 25px;">    
                    <td class="td-input" style="display: flex; ">
                        <?= generateDivBoxes(8, ''); ?>
                    </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td></td>
                <td>
                    <div style="margin-left: 380px;">
                        <div class="title-text">Nomor</div>
                    </div>
                </td> 
                <td>
                    <div style="margin-left: 155px;">
                        <div class="title-text">Tanggal Masa Berlaku</div>
                    </div>
                </td>   
            </tr>
        </table>             
    </div>
    <div style="margin-top: 1px;">
        <div style="text-align: left; font-size: 8px; font-weight: bold;">Diisi oleh Penduduk yang Mengajukan Surat Keterangan Pindah Luar Negeri</div>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">17. Negara Tujuan </div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 30px;">kode negara</div>
                </td>
                <td>
                    <div style="margin-left: 10px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(3, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">18. Alamat Tujuan</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi">Isi Alamat Tujuan di sini</div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi">Isi Keterangan Tambahan di sini</div>
                </td>
            </tr>
        </table>        
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">19. Penanggung Jawab</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td class="title-box-isi-panjang">
                    <div class="title-text-isi"></div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">20. Rencana Pindah Tanggal</div>
                </td>
                <td>
                    <div class="title-text" style="margin-left: 10px; margin-right: 10px;">:</div>
                </td>
                <td>
                    <div class="title-text">Tgl.</div>
                </td>
                <td>
                    <div style="margin-left: 10px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
                <td>
                    <div class="title-text">Bln.</div>
                </td>
                <td>
                    <div style="margin-left: 10px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
                <td>
                    <div class="title-text">Thn.</div>
                </td>
                <td>
                    <div style="margin-left: 10px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(4, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 20px;">
        <table width="100%">
            <tr>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">Mengetahui:</div>
                </td>
                <td width="20%"></td>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">Klaten, {{ date('d F Y') }}</div>
                </td>
            </tr>
            <tr>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">Kepala Dinas/Suku Dinas/UPT Dinas</div>
                </td>
                <td width="20%"></td>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">Pemohon,</div>
                </td>
            </tr>
            <tr>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">Kependudukan dan Pencatatan Sipil</div>
                </td>
                <td width="20%"></td>
                <td width="40%" style="text-align: center;">
                    <div class="title-text"></div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 50px;">
        <table width="100%">
            <tr>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">...........................</div>
                </td>
                <td width="20%"></td>
                <td width="40%" style="text-align: center;">
                    <div class="title-text">...........................</div>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
