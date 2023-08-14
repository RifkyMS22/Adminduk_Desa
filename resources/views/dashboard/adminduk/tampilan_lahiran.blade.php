<?php
function generateDivBoxes($numBoxes, $content) {
    $output = '';
    for ($i = 0; $i < $numBoxes; $i++) {
        $output .= '<div class="box">' . (isset($content[$i]) ? htmlspecialchars($content[$i]) : '') . '</div>';
    }
    return $output;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelahiran</title>
    <style>
        .table-input tr td:first-child {
                padding: 2px 0 2px 0;
                vertical-align: top
        }
        .table-input tr td:nth-child(2) {
                padding-top: 3px;
        }

        .table-input tr td {
            padding: 0;
            vertical-align: top;
        }
        .td-input .box {
            border: 0.2px solid #000;
            display: inline-block;
            width: 13px;
            height: 13px;
            text-align: center;
            line-height: 13px;
            margin-top: 0px;
            margin-left: -1px;
        }
        .td-inputt .box {
            border: 0.2px solid #000;
            display: inline-block;
            width: 13px;
            height: 13px;
            text-align: center;
            line-height: 13px;
            margin-top: -1px;
            margin-left: -1px;
        }
        .td-input .box:last-child {
            border-right: 0.5px solid #000 !important;
        }
        .font-size {
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .jarak-kotak{
            margin-bottom: 2px;
        }
    </style>

</head>
<body>
    <div class="container font-size jarak-kotak">
        <table  width="100%">
            <tr>
                <td width="70%"></td>
                <td width="15%" align="center"><font size="3">F-2.01</font><br></td>
                <td width="5%"></td>
            </tr>
        </table>
        <br />
    </div>
        <div class="container font-size jarak-kotak">
        <table width="100%">
            <tr>
                <td width="30%">Provinsi</td>
                <td width="60">: Jawa Tengah</td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>: Klaten</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: Trucuk</td>
            </tr>
            <tr>
                <td>Desa/Kelurahan</td>
                <td>: Palar</td>
            </tr>
            <tr>
                <td>Kode Wilayah</td>
                <td>: </td>
            </tr>
        </table>
        </div>
        <br />
        <div class="container font-size jarak-kotak">
        <table width="100%">
            <tr>
                <td align="center"><b>FORMULIR PELAPORAN PENCATATAN SIPIL DI DALAM WILAYAH NKRI</b></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table  width="100%">
                <tr>
                    <td colspan="4"><b>Jenis Pelaporan Pencatatan Sipil</b></td>
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>
                <tr>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    <td class="td-inputt" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%">Nama</td>
                    
                </tr>

            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>Data Pelapor</b></td>
            </tr>
            <tr>
                <td width="30%">Nama</td>
                <td style="padding-right: 0px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(34, "ARIEL NOAH"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">NIK</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, "12312313123123"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomer Dokumen Perjalanan</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, "123123213123"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomor Kartu Keluarga</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, "22312313123"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Kewarganegaraan</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(23, "Indonesia"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomer Handphone</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(20, "081231312313"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Alamat Email</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(20, "ariel@gmail.com"); ?>
                </td>
            </tr>
        </table>
        </div>
        
        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>DATA SUBJEK AKTA KESATU</b></td>
                {{-- <td></td> --}}
            </tr>
            <tr>
                <td width="30%">Nama</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(34, "ARIEL NOAH"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">NIK</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, ""); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomor Dokumen Perjalanan*</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, ""); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomor Kartu Keluarga</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, ""); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Kewarganegaraan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(34, ""); ?>
                </td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>DATA SUBJEK AKTA KEDUA (JIKA ADA)</b></td>
                {{-- <td></td> --}}
            </tr>
            <tr>
                <td width="30%">Nama</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(34, "ARIEL NOAH"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">NIK</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, "12312313123123"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomor Dokumen Perjalanan*</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, "12312313123123"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Nomor Kartu Keluarga</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, "12312313123123"); ?>
                </td>
            </tr>
            <tr>
                <td width="30%">Kewarganegaraan</td>
                <td style="padding-right: 5px;">:</td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(34, "12312313123123"); ?>
                </td>
            </tr>
        </table>
        </div>
        
        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
            <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <tr>
                    <td colspan="3"><b>DATA SAKSI I</b></td>
                    {{-- <td></td> --}}
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                    <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Warganegara</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="3"><b>DATA SAKSI II</b></td>
                    {{-- <td></td> --}}
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td style="padding-right: 5px;">: </td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
            </tr>
        </table>
        </div>
        
        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
            <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>DATA ORANG TUA** (hanya diisi untuk keperluan pencatatan kelahiran, lahir mati dan kematian)</b></td>
            </tr>
            <tr>
                <td width="30%">Nama Ayah</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">NIK Ayah</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(16, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tempat Lahir Ayah</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tanggal Lahir Ayah</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(14, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Kewarganegaraan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Nama Ibu</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">NIK Ibu</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(16, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tempat Lahir Ibu</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tanggal Lahir Ibu</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(14, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Kewarganegaraan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>
        
        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>DATA ANAK</b></td>
            </tr>
            <tr>
                <td width="30%">1. NIK</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nama</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. enis Kelamin</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. empat Di Lahirkan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Tempat Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Hari dan Tanggal Lahir</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. Pukul</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. Jenis Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. Kelahiran Ke</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">10. Penolong Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">11. Berat Bayi</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">12. Panjang Bayi</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(0, ""); ?></td>
            </tr>
        </table>
        </div>
        
        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>YANG LAHIR MATI</b></td>
            </tr>
            <tr>
                <td width="30%">Lamanya dalam kandungan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Jenis Kelamin</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tanggal Lahir Mati</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Jenis Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Anak ke</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tempat Dilahirkan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Penolong Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Sebab Lahir Mati</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Yang Menentukan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">Tempat kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PERKAWINAN ATAU PEMBATALAN PERKAWINAN</b></td>
            </tr>
            <tr>
                <td width="30%">1. NIK Ayah Dari Suami</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nama Ayah Dari Suami</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. NIK Ibu Dari Suami</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Nama Ibu Dari Suami</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. NIK Ayah Dari Istri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Nama Ayah Dari Istri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. NIK Ibu Dari Istri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. Nama Ibu Dari Istri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. Status Perkawinan Sebelum Kawin</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">10. Perkawinan Yang ke</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">11. Istri Yang ke- (bagi yang berpoligami)</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">12. Tanggal Pemberkatan Perkawinan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">13. Tanggal Melapor</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">14. Jam Pelaporan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">15. Agama</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">16. Kepercayaan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">17. Nama Organisasi Kepercayaan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">18. Nama Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">19. Nomor Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">20. Tanggal Penetapan Pengadilan </td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">21. Nama Pemuka Agama/Kepercayaan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">22. Nomor Surat Izin dari Perwakilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">23. Nomor Pasport</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">24. Perjanjian Perkawinan dibuat oleh Notaris</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">25. Nomor Akta Notaris</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">26. Tanggal Akta Notaris</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">27. Jumlah Anak (jika ada agar mengisi formulir tambahan nama anak dan akta kelahiran anak)</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td colspan="3"><a style="color:white">yang</a></td>
            </tr>
            <tr>
                <td colspan="3"><b>Bagi Pemohon Pembatalan Perkawinan Harap Mengisi Data di bawah ini:</b></td>
            </tr>
            <tr>
                <td width="30%">1. Tanggal Perkawinan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nomor Akta Perkawinan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Tanggal Akta Perkawinan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Nama Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Nomor Putusan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Tanggal Putusan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. Tanggal Pelaporan Perkawinan di Luar Negeri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>KEMATIAN</b></td>
            </tr>
            <tr>
                <td width="30%">1. NIK</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nama Lengkap</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Tanggal Kematian</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Pukul</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Sebab Kematian</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Tempat kematian</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. Yang menerangkan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PENGANGKATAN ANAK</b></td>
            </tr>
            <tr>
                <td width="30%">1. Nama anak angkat </td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nomor Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Nama Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. NIK Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. Kewarganegaraan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. Nama Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. NIK Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">10. Kewarganegaraan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">11. Nama Ibu Angkat</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">12. NIK Ibu Angkat</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">13. Nomor Paspor</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">14. Nama Ayah Angkat</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">15. NIK Ayah Angkat</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">16. Nomor Paspor</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">17. Nama Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">18. Tanggal Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">19. Nomor Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">20. Nama lembaga Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">21. Tempat lembaga Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PENGAKUAN ANAK</b></td>
            </tr>
            <tr>
                <td width="30%">1. Nomor Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Tanggal/Bulan/Tahun Kelahiran Anak</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Tanggal/Bulan/Tahun Perkawinan Agama</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Nama Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. NIK Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. Kewarganegaraan Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. Nama Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">10. NIK Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">11. Kewarganegaraan Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">12. Tanggal Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">13. Nomor Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">14. Nama lembaga Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PENGESAHAN ANAK</b></td>
            </tr>
            <tr>
                <td width="30%">1. Nomor Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Tanggal/Bulan/Tahun Kelahiran Anak</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Tanggal/Bulan/Tahun Perkawinan Agama</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Tanggal/Bulan/Tahun Akta Perkawinan/Buku Nikah</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. Nama Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. NIK Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. Kewarganegaraan Ibu Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">10. Nama Ayah Kandung </td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">11. NIK Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">12. Kewarganegaraan Ayah Kandung</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">13. Tanggal Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">14. Nomor Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">15. Nama lembaga Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PERUBAHAN NAMA</b></td>
            </tr>
            <tr>
                <td width="30%">1. Nama Lama</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nama Baru</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Nomor Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Nama Ayah/Ibu/Wali (bagi yang di bawah umur)</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. NIK Ayah/Ibu/Wali</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Kewarganegaraan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7. Nomor Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. Tanggal Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. Nama lembaga Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PERUBAHAN STATUS KEWARGANEGARAAN</b></td>
            </tr>
            <tr>
                <td width="30%">1. Kewarganegaraan Baru</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nomor Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Nomor Akta Perkawinan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Nama Suami atau Istri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. NIK Suami atau Istri</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Nomor Paspor</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">7.  Nomor Afidavi</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">8. Nomor Keputusan Presiden</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">9. Tanggal/Bulan/Tahun </td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">10. Nomor Berita Acara Sumpah/Janji Setia                </td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">11. Nama Jabatan yang menerbitkan BAS/Janji Setia</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">12. Tanggal/Bulan/Tahun</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">13. Nomor Keputusan Menteri (Bidang Kewarganegaraan)</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">14. Tanggal/Bulan/Tahun</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PERUBAHAN PERISTIWA PENTING LAINNYA</b></td>
            </tr>
            <tr>
                <td width="30%">1. Nomor Akta Kelahiran</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Jenis Kelamin Lama</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Jenis Kelamin Baru</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Nomor Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Tanggal Penetapan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Nama lembaga Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PEMBETULAN AKTA</b></td>
            </tr>
            <tr>
                <td width="30%">1. Nomor Akta yang akan dibetulkan/ditarik</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nama Ayah/Ibu/Wali (bagi yang di bawah umur)</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. NIK Ayah/Ibu/Wali</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td colspan="3"><a style="color:white">yang</a></td>
            </tr>
            <tr>
                <td colspan="3"><b>PEMBATALAN AKTA</b></td>
            </tr>
            <tr>
                <td width="30%">1. Akta yang dibatalkan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nomor Akta yang dibatalkan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Nomor Putusan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Tanggal Putusan Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Nama lembaga Pengadilan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; padding: 5px">
        <table class="table-input" style="border-collapse: collapse" width="100%">
            <tr>
                <td colspan="3"><b>PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI</b></td>
            </tr>
            <tr>
                <td width="30%">1. Jenis peristiwa penting </td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">2. Nomor Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">3. Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">4. Kantor Perwakilan yang Melakukan pencatatan</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">5. Nomor Bukti Pencatatan Sipil dari Negara Setempat</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
            <tr>
                <td width="30%">6. Tanggal Penerbitan dari Negara Setempat</td>
                <td style="padding-right: 5px;">: </td>
                <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                <?= generateDivBoxes(34, ""); ?></td>
            </tr>
        </table>
        </div>

        
        <table width="100%">
            <tr>
                <td align="center" width="30%">Mengetahui</td>
                <td width="30%"></td>
                <td align="center" width="30%">Klaten, 24 Juli 2023</td>
            </tr>
            <tr>
                <td align="center" width="30%">Kepala Desa/Lurah/</td>
                <td width="30%"></td>
                <td align="center" width="30%">Pelapor</td>
            </tr>
            <tr>
                <td align="center" width="30%">Pejabat Dukcapil Yang Membidangi</td>
                <td width="30%"></td>
                <td align="center" width="30%"></td>
            </tr>
            {{-- <tr>
                <td height="90%" width="20%">aaaa</td>
                <td height="90%" width="60%">aaaa</td>
                <td height="90%" width="20%">Rifky Muhammad Shodiq</td>
            </tr> --}}
        </table>
        <br />
        <br />
        <br />
        <br />
        <table width="100%" height="100%" align="right">
            <tr>
                <td width="30%" align="center">Pak Lurah</td>
                <td width="30%"></td>
                <td width="30%" align="center">Rifky Muhammad Shodiq</td>
            </tr>
        </table>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
</body>
</html>
