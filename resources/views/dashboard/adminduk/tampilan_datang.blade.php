
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan Datang</title>
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
            width: 20px; /* Lebar kotak */
            height: 20px; /* Tinggi kotak */
            border: 1px solid #000; /* Garis tepi dengan warna hitam */
            text-align: center; /* Teks di tengah kotak */
            /* display: inline-block; Menjadikan elemen inline-block */
            margin: 0px; /* Margin antar kotak */
            font-size: 10px; /* Ukuran teks dalam kotak */
        }
        hr {
            border: 1px solid #000000;
            width: 100%;
        }

        .title-box {
            border: 1px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 250px;
            height: 16px;
        }

        .title-box-isi {
            border: 1px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 500px;
            height: 16px;
        }
        .title-box-isi-1 {
            border: 1px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 700px;
            height: 16px;
        }

        .title-box-isi-panjang {
            border: 1px solid #000000;
            text-align: left;
            background-color: #ffffff;
            width: 1000px;
            height: 16px;
        }

        /* Style untuk teks judul */
        .title-text {
            font-size: 8px;
            font-weight: bold;
            color: #000000;
        }

        .title-text-isi {
            font-size: 8px;
            font-weight: bold;
            color: #000000;
        }
        .box-isi {
            border: 1px solid #000000;
            text-align: center;
            background-color: #ffffff;
            width: 16px;
            height: 16px;
        }
        .box-isi-no {
            border: 1px solid #000000;
            text-align: center;
            background-color: #ffffff;
            width: 34px;
            height: 16px;
        }
        .box-isi-nik {
            border: 1px solid #000000;
            text-align: center;
            background-color: #ffffff;
            width: 255px;
            height: 16px;
        }
        .box-isi-nl {
            border: 1px solid #000000;
            text-align: center;
            background-color: #ffffff;
            width: 750px;
            height: 16px;
        }
        .td-input .box {
            border: 1px solid #000000;
            text-align: center;
            background-color: #ffffff;
            width: 16px;
            height: 16px;
            display: flex;
            }

        @media print {
            @page {
                size: landscape;
            }
        }
    </style>

</head>
<body>
    <div>
        <table width="100%">
            <tr>
                <td align="center">
                    <div>
                        <div style="text-align: center; font-size: 9px; font-weight: bold;">FORMULIR PENDAFTARAN PERPINDAHAN PENDUDUK</div>
                    </div>
                </td>
                <td align="right">
                    <div style="display: flex; justify-content: flex-end">
                        <div style="border: 1px solid #000; font-size: 8px; font-weight: bold;">F-2.01</div>
                    </div>
                </td>                
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <hr style="margin-top: -2px;">
    </div>
    <div style="margin-top: -8px;">
        <table width="100%">
            <tr>
                <td align="left">
                    <div style="align-items: flex-start; margin-top: -10px;">
                        <div style="text-align: left; font-size: 9px; font-weight: bold;"> Perhatian :</div>
                    </div>
                </td>
                <td align="right">
                    <div style="display: flex; justify-content: flex-end; margin-top: -10px;">
                        <div style="text-align: right; font-size: 8px; font-weight: bold;"> alamat email </div>
                    </div>
                </td>                 
            </tr>
        </table>
    </div>
    <div style="margin-top: 3px;">
        <table width="100%">
            <tr>
                <td align="left">
                    <div style="align-items: flex-start; margin-top: -10px;">
                        <div style="text-align: left; font-size: 9px; font-weight: bold;"> Harap diisi dengan huruf cetak dan menggunakan tinta hitam </div>
                    </div>
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
                    <div class="title-text">:</div>
                </td>
                <td class="title-box-isi">
                    <div class="title-text-isi"></div>
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
                    <div class="title-text">:</div>
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
                    <div class="title-text">3. NIK</div>
                </td>
                <td>
                    <div class="title-text">:</div>
                </td>
                <td class="title-box-isi">
                    <div class="title-text-isi"></div>
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
                <td style="width: 40px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">A</div>
                </td>
                <tr>
                    <td>
                        <td>  
                            <td>  
                                <td class="box-isi">
                                    <div class="title-text-isi">A</div>
                                        <td>
                                            <div class="title-text-isi">Surat Keterangan Pindah	</div>
                                        </td>
                                </td>
                            </td>
                        <td>
                    </td>
                </tr>               
                <tr>
                    <td>
                        <td>  
                            <td>  
                                <td class="box-isi">
                                    <div class="title-text-isi">A</div>
                                        <td>
                                            <div class="title-text-isi">Surat Keterangan Pindah Luar Negeri (SKPLN)</div>
                                        </td>
                                </td>
                            </td>
                        <td>
                    </td>
                </tr>               
                <tr>
                    <td>
                        <td>  
                            <td>  
                                <td class="box-isi">
                                    <div class="title-text-isi">A</div>
                                        <td>
                                            <div class="title-text-isi">Surat Keterangan Tempat Tinggal (SKTT)</div>
                                        </td>
                                </td>
                            </td>
                        <td>
                    </td>
                </tr>               
                <tr>
                    <td>
                        <td>  
                            <td>  
                                <td>
                                    <div class="title-text-isi">
                                        <td>
                                            <div class="title-text-isi">Bagi Orang Asing Tinggal Terbatas</div>
                                        </td>
                                    </div>
                                </td>
                            </td>
                        <td>
                    </td>
                </tr>               
                
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
                    <div class="title-text">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div style="margin-left: 50px;" class="title-text">RT </div>
                </td>
                <td>
                    <div style="margin-left: 5px;">    
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(3, ''); ?>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 50px;" class="title-text">RW </div>
                </td>
                <td>
                    <div style="margin-left: 5px;">    
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
                <td>    
                    <div class="title-text" style="margin-left:255px; margin-right:30px;">a. Desa/Kelurahan</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">b. Kecamatan</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:255px; margin-right:30px;">c. Kabupaten/Kota</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">d. Provinsi</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    </td>
                </td>
            </tr>
            
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:255px; margin-right:30px;">e. Kode pos</div>
                    <td class="td-input" style="display: flex; ">
                        <?= generateDivBoxes(5, ''); ?>
                    </td>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="title-box">
                    <div class="title-text">6. Klasifikasi Kepindahan</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi">A</div>
                    <td>
                        <div class="title-text-isi">Dalam satu desa/kelurahan atau yang disebut dengan nama lain</div>
                    </td>
                </td>
            </tr>
            <tr>
                <td>
                    <td>
                        <td class="box-isi">
                            <div class="title-text-isi">A</div>
                            <td>
                                <div class="title-text-isi">Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan</div>
                            </td>
                        </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>
                    <td>
                        <td class="box-isi">
                            <div class="title-text-isi">A</div>
                            <td>
                                <div class="title-text-isi">Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota</div>
                            </td>
                        </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>
                    <td>
                        <td class="box-isi">
                            <div class="title-text-isi">A</div>
                            <td>
                                <div class="title-text-isi">Antar kabupaten/kota dalam satu provinsi</div>
                            </td>
                        </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>
                    <td>
                        <td class="box-isi">
                            <div class="title-text-isi">A</div>
                            <td>
                                <div class="title-text-isi">Antar provinsi</div>
                            </td>
                        </td>
                    </td>
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
                    <div class="title-text">:</div>
                </td>
                <td class="title-box-isi-1">
                    <div class="title-text-isi"></div>
                </td>
                <td>
                    <div style="margin-left: 50px;" class="title-text">RT </div>
                </td>
                <td>
                    <div style="margin-left: 5px;">    
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(3, ''); ?>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 50px;" class="title-text">RW </div>
                </td>
                <td>
                    <div style="margin-left: 5px;">    
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
                <td>    
                    <div class="title-text" style="margin-left:255px; margin-right:30px;">a. Desa/Kelurahan</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">b. Kecamatan</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    </td>
                </td>
            </tr>
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:255px; margin-right:30px;">c. Kabupaten/Kota</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    <td>
                        <div class="title-text" style="margin-left:40px; margin-right:30px;">d. Provinsi</div>
                    <td class="title-box">
                        <div class="title-text">PALAR</div>
                    </td>
                    </td>
                </td>
            </tr>
            
            <tr>
                <td>    
                    <div class="title-text" style="margin-left:255px; margin-right:30px;">e. Kode pos</div>
                    <td class="td-input" style="display: flex; ">
                        <?= generateDivBoxes(5, ''); ?>
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
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Pekerjaan</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Keamanan</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Perumahan</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Lainnya (sebutkan)</div>
                            </td>
                        </td>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Pendidikan</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Kesehatan</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Keluarga</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">.......................</div>
                            </td>
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
                    <div class="title-text">9. Jenis Kepindahan</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Kepala Keluarga</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 220px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Kepala Keluarga dan Sebagian Anggota Keluarga</div>
                            </td>
                        </td>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td style="width: 10px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi"> Kepala Keluarga dan Seluruh Anggota Keluarga</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 220px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Anggota Keluarga</div>
                            </td>
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
                    <div class="title-text">10. Anggota Keluarga Tidak Pindah</div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Numpang KK</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 130px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Membuat KK baru</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 130px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Nomor KK tetap</div>
                            </td>
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
                    <div class="title-text">11. Anggota Keluarga Yang Pindah </div>
                </td>
                <td style="width: 10px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Numpang KK</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 130px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Membuat KK baru</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 130px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Nomor KK tetap</div>
                            </td>
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
                    <div class="title-text">12. Daftar Anggota Keluarga yang Pindah</div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="box-isi-no">
                    <div class="title-text-isi"> NO </div>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="box-isi-nik">
                            <div class="title-text-isi"> NIK </div>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> NAMA LENGKAP </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="box-isi-no">
                            <div class="title-text-isi"> NO </div>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-top: 1px;">
        <table>
            <tr>
                <td class="td-input" style="display: flex; ">
                    <?= generateDivBoxes(2, ''); ?>
                </td>
                <td>   
                    <div style="margin-left: 40px;">
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(16, ''); ?>
                        </td>
                    </div>
                </td>
                <td>   
                    <div style="margin-left: 39px;">
                        <td class="box-isi-nl">
                            <div class="title-text-isi"> </div>
                        </td>
                    </div>
                </td>
                <td>    
                    <div style="margin-left: 40px;"> 
                        <td class="td-input" style="display: flex; ">
                            <?= generateDivBoxes(2, ''); ?>
                        </td>
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
                    <div class="title-text">:</div>
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
                <td style="width: 10px;">
                    <div class="title-text">:</div>
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Organisasi Internasional</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Pemerintah</div>
                            </td>
                        </td>
                    </div>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Perusahaan</div>
                            </td>
                        </td>
                    </div>
                </td>
            <tr>
                <td>
                </td>
                <td style="width: 10px;">
                </td>
                <td class="box-isi">
                    <div class="title-text-isi"> </div>
                    <td>
                        <div class="title-text-isi">Perorangan</div>
                    </td>
                </td>
                <td>
                    <div style="margin-left: 110px;">
                        <td class="box-isi">
                            <div class="title-text-isi"> </div>
                            <td>
                                <div class="title-text-isi">Tanpa Sponsor</div>
                            </td>
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
                    <div class="title-text">15. Alamat Sponsor</div>
                </td>
                <td>
                    <div class="title-text">:</div>
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
                    <div class="title-text">:</div>
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
                    <div style="margin-left: 330px;">
                        <td>
                            <div class="title-text">Nomor</div>
                        </td>
                    </div>
                </td> 
                <td>
                    <div style="margin-left: 145px;">
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
                    <div class="title-text">:</div>
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
                    <div class="title-text">:</div>
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
                    <div class="title-text">19. Penanggung Jawab</div>
                </td>
                <td>
                    <div class="title-text">:</div>
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
                    <div class="title-text">20. Rencana Pindah Tanggal</div>
                </td>
                <td>
                    <div class="title-text">:</div>
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
                    <div class="title-text">Klaten, 21 Desember 2023</div>
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
