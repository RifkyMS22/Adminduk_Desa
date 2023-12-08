<?php
    $tgl_lahir_ibu = DateTime::createFromFormat('Y-m-d', $kelahiran->tgl_lahir_ibu);
    $tgl_lahir_ayah = DateTime::createFromFormat('Y-m-d', $kelahiran->tgl_lahir_ayah);
    $tgl_lahir_bayi = DateTime::createFromFormat('Y-m-d', $kelahiran->tgl_lahir);
    if ($tgl_lahir_bayi instanceof DateTime) {

        $dayNumber = $tgl_lahir_bayi->format('N');
        $days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

        $dayName = $days[$dayNumber];

    } else {
        echo "Invalid date format";
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
            .table-checklist tr td:first-child {
                vertical-align: middle
            }

            .table-checklist tr td {
                padding: 0;
                padding-left: 1px
            }

            .table-checklist tr td.td-name {
                padding-left: 10px;
            }

            .table-input tr td:first-child {
                vertical-align: top;
            }

            .table-input tr td:nth-child(2) {
                padding-top: 0px;
            }

            .table-input tr td {
                padding: 0;
                vertical-align: top;
            }

            .td-input .box {
                border: 2px solid #000;
                display: inline-block;
                width: 26px;
                height: 28px;
                text-align: center;
                line-height: 28px;
                margin-top: -2px;
                margin-left: -2px;
                text-transform: uppercase;
            }

            .td-input .box:last-child {
                border-right: 2px solid #000 !important;
            }

            .font-size {
                font-family: Arial, Helvetica, sans-serif;
            }

            .jarak-kotak {
                border: 1px solid #000;
                padding: 10px;
                margin-bottom: 10px
            }

        </style>

    </head>

    <body>
        <div class="container font-size jarak-kotak" style="padding: 0; border: none">
            <table width="100%" style="padding: 0">
                <tr style="padding: 0">
                    <td align="right" style="padding: 0">
                        <div style="display: flex; justify-content: flex-end">
                            <div style="border: 2px solid #000; padding: 5px; font-weight: 600">F-2.01</div>
                        </div>
                    </td>
                </tr>
            </table>

        </div>
        <div class="container font-size jarak-kotak" style="padding: 0; border: none">
            <table class="table-input" width="100%" class="tg">
                <tr>
                    <td width="20%">Provinsi</td>
                    <td width="80%">: Jawa Tengah</td>
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
                    <td class="td-input">: <?= generateDivBoxes(10, "1234567890"); ?></td>
                </tr>
            </table>
        </div>
        <div class="container font-size jarak-kotak" style="padding: 10px 0; border: none">
            <table width="100%">
                <tr>
                    <td align="center"><b>FORMULIR PELAPORAN PENCATATAN SIPIL DI DALAM WILAYAH NKRI</b></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="padding: 0; border: none; margin-bottom: 15px">
            <table width="100%" class="table-checklist" style="border-collapse: collapse">
                <tr>
                    <td colspan="4" style="padding-bottom: 10px"><b>Jenis Pelaporan Pencatatan Sipil</b></td>
                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, "v"); ?>
                    </td>
                    <td width="50%" class="td-name">Kelahiran</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pengakuan Anak</td>

                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Lahir Mati</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pengesahan Anak</td>
                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Perkawinan</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Perubahan Nama</td>

                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pembatalan Perkawinan</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Perubahan Status Kewarganegaraan</td>

                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Perceraian</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pencatatan Peristiwa Penting Lainnya</td>

                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pembatalan Perceraian</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pembetulan Akta</td>

                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Kematian</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pembatalan Akta</td>

                </tr>
                <tr>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pengangkatan Anak</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                    </td>
                    <td width="50%" class="td-name">Pelaporan Pencatatan Sipil dari Luar Wilayah NKRI</td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>Data Pelapor</b></td>
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->nama_pelapor); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->nik_pelapor); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomer Dokumen Perjalanan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->no_kk_pelapor); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(23, $kelahiran->warganegara_pelapor == 'wni' ? "WARGA NEGARA INDONESIA" : 'WARGA NEGARA ASING'); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomer Handphone</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(20, $kelahiran->no_hp_pelapor); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Alamat Email</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(20, $kelahiran->email_pelapor); ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>DATA SUBJEK AKTA KESATU</b></td>
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Dokumen Perjalanan*</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>DATA SUBJEK AKTA KEDUA (JIKA ADA)</b></td>
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Dokumen Perjalanan*</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>DATA SAKSI I</b></td>
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->nama_s1); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->nik_s1); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->no_kk_s1); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Warganegara</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->warganegara_s1 == 'wni' ? "WARGA NEGARA INDONESIA" : 'WARGA NEGARA ASING'); ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>DATA SAKSI II</b></td>
                </tr>
                <tr>
                    <td width="30%">Nama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->nama_s2); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->nik_s2); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nomor Kartu Keluarga</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->no_kk_s2); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->warganegara_s2 == 'wni' ? "WARGA NEGARA INDONESIA" : 'WARGA NEGARA ASING'); ?>
                    </td>
                </tr>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>DATA ORANG TUA** (hanya diisi untuk keperluan
                            pencatatan kelahiran, lahir mati
                            dan kematian)</b></td>
                </tr>
                <tr>
                    <td width="30%">Nama Ayah</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->nama_ayah); ?></td>
                </tr>
                <tr>
                    <td width="30%">NIK Ayah</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->nik_ayah); ?></td>
                </tr>
                <tr>
                    <td width="30%">Tempat Lahir Ayah</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->tmpt_lahir_ayah); ?></td>
                </tr>
                <tr>
                    <td width="30%">Tanggal Lahir Ayah</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <span style="margin-right: 24px; line-height: 28px; margin-left: 1px;">Tgl :</span>
                        <?= generateDivBoxes(2, $tgl_lahir_ayah->format('d')); ?>
                        <span style="margin-right: 13px; line-height: 28px; margin-left: 11px">Bln :</span>
                        <?= generateDivBoxes(2, $tgl_lahir_ayah->format('m')); ?>
                        <span style="margin-right: 9.5px; line-height: 28px; margin-left: 10px">Thn :</span>
                        <?= generateDivBoxes(4, $tgl_lahir_ayah->format('Y')); ?>
                    </td>
                </tr>

                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->warganegara_ayah == 'wni' ? "WARGA NEGARA INDONESIA" : 'WARGA NEGARA ASING'); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Nama Ibu</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->nama_ibu); ?></td>
                </tr>
                <tr>
                    <td width="30%">NIK Ibu</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, $kelahiran->nik_ibu); ?></td>
                </tr>
                <tr>
                    <td width="30%">Tempat Lahir Ibu</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, $kelahiran->tmpt_lahir_ibu); ?></td>
                </tr>
                <tr>
                    <td width="30%">Tanggal Lahir Ibu</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <span style="margin-right: 24px; line-height: 28px; margin-left: 1px;">Tgl :</span>
                        <?= generateDivBoxes(2, $tgl_lahir_ibu->format('d')); ?>
                        <span style="margin-right: 13px; line-height: 28px; margin-left: 11px">Bln :</span>
                        <?= generateDivBoxes(2, $tgl_lahir_ibu->format('m')); ?>
                        <span style="margin-right: 9.5px; line-height: 28px; margin-left: 10px">Thn :</span>
                        <?= generateDivBoxes(4, $tgl_lahir_ibu->format('Y')); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?php if ($kelahiran->warganegara_ibu == "wni"): ?>
                        <?= generateDivBoxes(34, "WARGA NEGARA INDONESIA"); ?>
                        <?php else: ?>
                        <?= generateDivBoxes(34, "WARGA NEGARA ASING"); ?>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3" style="padding-bottom: 10px"><b>DATA ANAK</b></td>
                </tr>
                <tr>
                    <td width="30%">1. NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; padding-bottom: 10px">
                        <?= $kelahiran->nik_bayi; ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; padding-bottom: 10px">
                        <?= $kelahiran->nama_bayi; ?>
                    </td>

                </tr>
                <tr>
                    <td width="30%">3. Jenis Kelamin</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, $kelahiran->jns_kelamin == "male" ? "v" : ""); ?>
                        <span style="margin-left: 10px; margin-right: 50px; line-height: 28px">1. Laki-Laki</span>
                        <?= generateDivBoxes(1, $kelahiran->jns_kelamin == "female" ? "v" : ""); ?>
                        <span style="margin-left: 10px; line-height: 28px">2. Perempuan</span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">4. Tempat Di Lahirkan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; margin-bottom: 10px">
                        <?= generateDivBoxes(1, $kelahiran->tmpt_dilahirkan == 'rs' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px;">1. RS/RB</span>
                        <?= generateDivBoxes(1, $kelahiran->tmpt_dilahirkan == 'puskesmas' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px;">2. Puskesmas</span>
                        <?= generateDivBoxes(1, $kelahiran->tmpt_dilahirkan == 'polindes' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px;">3. Polindes</span>
                        <?= generateDivBoxes(1, $kelahiran->tmpt_dilahirkan == 'rumah' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px;">4. Rumah</span>
                        <?= generateDivBoxes(1, $kelahiran->tmpt_dilahirkan == 'lainnya' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px;">5. Lainnya</span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">5. Tempat Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; margin-bottom: 10px">
                        <?= $kelahiran->tmpt_kelahiran; ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">6. Hari dan Tanggal Lahir</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; margin-bottom: 10px">
                        <span style="margin-right: 10px; line-height: 28px;">Hari :</span>
                        <?= generateDivBoxes(6, $dayName); ?>
                        <span style="margin-right: 10px; margin-left: 10px; line-height: 28px;">Tgl :</span>
                        <?= generateDivBoxes(2, $tgl_lahir_bayi->format('d')); ?>
                        <span style="margin-right: 10px; margin-left: 10px; line-height: 28px;">Bln :</span>
                        <?= generateDivBoxes(2, $tgl_lahir_bayi->format('m')); ?>
                        <span style="margin-right: 10px; margin-left: 10px; line-height: 28px;">Thn :</span>
                        <?= generateDivBoxes(4, $tgl_lahir_bayi->format('Y')); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">7. Pukul</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; margin-bottom: 10px">
                        <?= $kelahiran->jam; ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">8. Jenis Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; margin-bottom: 10px">
                        <?= generateDivBoxes(1, $kelahiran->jns_kelahiran == 'tunggal' ? "v" : ""); ?>
                        <span style="margin-right: 20px; line-height: 28px; margin-left: 10px;">1. Tunggal</span>
                        <?= generateDivBoxes(1, $kelahiran->jns_kelahiran == 'kembar2' ? "v" : ""); ?>
                        <span style="margin-right: 20px; line-height: 28px; margin-left: 10px;">2. Kembar 2</span>
                        <?= generateDivBoxes(1, $kelahiran->jns_kelahiran == 'kembar3' ? "v" : ""); ?>
                        <span style="margin-right: 20px; line-height: 28px; margin-left: 10px;">3. Kembar 3</span>
                        <?= generateDivBoxes(1, $kelahiran->jns_kelahiran == 'kembar4' ? "v" : ""); ?>
                        <span style="margin-right: 20px; line-height: 28px; margin-left: 10px;">4. Kembar 4</span>
                        <?= generateDivBoxes(1, $kelahiran->jns_kelahiran == 'kembarbanyak' ? "v" : ""); ?>
                        <span style="margin-right: 20px; line-height: 28px; margin-left: 10px;">5. Lainnya</span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">9. Kelahiran Ke</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap; margin-bottom: 10px">
                        <?= $kelahiran->anak_ke; ?></td>
                </tr>
                <tr>
                    <td width="30%">10. Penolong Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, $kelahiran->penolong_lahir == 'dokter' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px">1. Dokter</span>
                        <?= generateDivBoxes(1, $kelahiran->penolong_lahir == 'bidan' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px">2. Bidan/Perawat</span>
                        <?= generateDivBoxes(1, $kelahiran->penolong_lahir == 'dukun' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px">3. Dukun</span>
                        <?= generateDivBoxes(1, $kelahiran->penolong_lahir == 'lainnya' ? "v" : ""); ?>
                        <span style="margin-right: 20px; margin-left: 10px; line-height: 28px">4. Lainnya</span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">11. Berat Bayi</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(3,  $kelahiran->brt_bayi); ?>
                        <span style="margin-left: 10px; line-height: 28px">Kg</span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">12. Panjang Bayi</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(3,  $kelahiran->pjg_bayi); ?>
                        <span style="margin-left: 10px; line-height: 28px">Cm</span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>YANG LAHIR MATI</b></td>
                </tr>
                <tr>
                    <td width="30%">Lamanya dalam kandungan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 1px;"></span>
                        Bulan
                    </td>
                </tr>
                <tr>
                    <td width="30%">Jenis Kelamin</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Laki-laki
                        <span style="margin-right: 3px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        2. Perempuan
                    </td>
                </tr>
                <tr>
                    <td width="30%">Tanggal Lahir Mati</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">

                        Tgl :
                        <span style="margin-right: 3px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 3px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        Thn :
                        <span style="margin-right: 3px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                        <span style="margin-right: 3px;"></span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">Jenis Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Tunggal
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        2. Kembar 2
                        <span style="margin-right: 3px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 5px;"></span>
                        3. Kembar 3
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Kembar 4
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        5. Lainnya

                    </td>
                </tr>
                <tr>
                    <td width="30%">Anak ke</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(0, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">Tempat Dilahirkan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. RS/RB
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 6px;"></span>
                        2. Puskesmas
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        3. Polindes
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Rumah
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        5. Lainnya
                    </td>
                </tr>
                <tr>
                    <td width="30%">Penolong Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Dokter
                        <span style="margin-right: 7px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 6px;"></span>
                        2. Bidan/Perawat
                        <span style="margin-right: 7px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 4px;"></span>
                        3. Dukun
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Lainnya
                    </td>
                </tr>
                <tr>
                    <td width="30%">Sebab Lahir Mati</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(0, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">Yang Menentukan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Dokter
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        2. Bidan/Perawat
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        3. Tenaga Kes
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Kepolisian
                        <span style="margin-right: 5px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        5. Lainnya
                    </td>
                </tr>
                <tr>
                    <td width="30%">Tempat kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(0, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PERKAWINAN ATAU PEMBATALAN PERKAWINAN</b></td>
                </tr>
                <tr>
                    <td width="30%">1. NIK Ayah Dari Suami</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nama Ayah Dari Suami</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. NIK Ibu Dari Suami</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Nama Ibu Dari Suami</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. NIK Ayah Dari Istri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Nama Ayah Dari Istri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. NIK Ibu Dari Istri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. Nama Ibu Dari Istri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">9. Status Perkawinan Sebelum Kawin</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Kawin
                        <span style="margin-right: 17px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Belum Kawin
                        <span style="margin-right: 18px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Cerai Hidup
                        <span style="margin-right: 23px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Cerai Mati
                    </td>
                </tr>
                <tr>
                    <td width="30%">10. Perkawinan Yang ke</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(2, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">11. Istri Yang ke- (bagi yang berpoligami)</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(2, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">12. Tanggal Pemberkatan Perkawinan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">13. Tanggal Melapor</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">14. Jam Pelaporan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 6px;"></span>
                        :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">15. Agama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Islam
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        2. Kristen
                        <span style="margin-right: 17px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        3. Katholik
                        <span style="margin-right: 13px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Hindu
                        <span style="margin-right: 20px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        5. Budha
                        <span style="margin-right: 18px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        6. Konghuchu
                    </td>
                </tr>
                <tr>
                    <td width="30%">16. Kepercayaan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">17. Nama Organisasi Kepercayaan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">18. Nama Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">19. Nomor Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">20. Tanggal Penetapan Pengadilan </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">21. Nama Pemuka Agama/Kepercayaan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">22. Nomor Surat Izin dari Perwakilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">23. Nomor Pasport</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">24. Perjanjian Perkawinan dibuat oleh Notaris</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">25. Nomor Akta Notaris</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">26. Tanggal Akta Notaris</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">27. Jumlah Anak (jika ada agar mengisi formulir tambahan nama anak dan akta
                        kelahiran anak)</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
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
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nomor Akta Perkawinan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Tanggal Akta Perkawinan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">4. Nama Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Nomor Putusan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Tanggal Putusan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Tanggal Pelaporan Perkawinan di Luar Negeri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b> PERCERAIAN ATAU PEMBATALAN PERCERAIAN </b></td>
                </tr>
                <tr>
                    <td><b>Yang mengajukan perceraian/pembatalan perceraian***</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nomor Akta Perkawinan </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Tanggal Akta Perkawinan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">3. Tempat Pencatatan Perkawinan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Nama Pengadilan </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Tanggal Putusan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">6. Nomor Putusan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Nomor Surat Keterangan Panitera Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. Tanggal Surat Keterangan Panitera Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">9. Tanggal Melapor</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><b> Bagi Pemohon Pembatalan Perceraian Harap Mengisi Data di bawah ini :</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nomor Akta Perceraian</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Tanggal Akta Perceraian</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">3. Tanggal Pelaporan Perceraian dari Luar Negeri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>KEMATIAN</b></td>
                </tr>
                <tr>
                    <td width="30%">1. NIK</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(16, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nama Lengkap</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Tanggal Kematian</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        Tgl :
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        Bln :
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 2px;"></span>
                        Thn :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(4, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">4. Pukul</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(2, ""); ?>
                        <span style="margin-right: 6px;"></span>
                        :
                        <span style="margin-right: 6px;"></span>
                        <?= generateDivBoxes(2, ""); ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">5. Sebab Kematian</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Sakit biasa/tua
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        2. Wabah Penyakit
                        <span style="margin-right: 14px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        3. Kecelakaan
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Kriminalitas
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        5. Bunuh diri
                        <span style="margin-right: 12px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        6. Lainnya
                    </td>
                </tr>
                <tr>
                    <td width="30%">6. Tempat kematian</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Yang menerangkan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        1. Dokter
                        <span style="margin-right: 8px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        2. Tenaga Kesehatan
                        <span style="margin-right: 14px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        3. Kepolisian
                        <span style="margin-right: 11px;"></span>
                        <?= generateDivBoxes(1, ""); ?>
                        <span style="margin-right: 3px;"></span>
                        4. Lainnya
                    </td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PENGANGKATAN ANAK</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nama anak angkat </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nomor Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Nama Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. NIK Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. Nama Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">9. NIK Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">10. Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">11. Nama Ibu Angkat</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">12. NIK Ibu Angkat</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">13. Nomor Paspor</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">14. Nama Ayah Angkat</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">15. NIK Ayah Angkat</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">16. Nomor Paspor</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">17. Nama Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">18. Tanggal Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">19. Nomor Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">20. Nama lembaga Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">21. Tempat lembaga Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PENGAKUAN ANAK</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nomor Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Tanggal/Bulan/Tahun Kelahiran Anak</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Tanggal/Bulan/Tahun Perkawinan Agama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Nama Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. NIK Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. Kewarganegaraan Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">9. Nama Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">10. NIK Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">11. Kewarganegaraan Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">12. Tanggal Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">13. Nomor Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">14. Nama lembaga Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PENGESAHAN ANAK</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nomor Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Dinas Kabupaten/Kota yang menerbitkan Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Tanggal/Bulan/Tahun Kelahiran Anak</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Tanggal/Bulan/Tahun Perkawinan Agama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Tanggal/Bulan/Tahun Akta Perkawinan/Buku Nikah</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Nama Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. NIK Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">9. Kewarganegaraan Ibu Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">10. Nama Ayah Kandung </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">11. NIK Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">12. Kewarganegaraan Ayah Kandung</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">13. Tanggal Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">14. Nomor Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">15. Nama lembaga Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PERUBAHAN NAMA</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nama Lama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nama Baru</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Nomor Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Nama Ayah/Ibu/Wali (bagi yang di bawah umur)</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. NIK Ayah/Ibu/Wali</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Kewarganegaraan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Nomor Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. Tanggal Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">9. Nama lembaga Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PERUBAHAN STATUS KEWARGANEGARAAN</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Kewarganegaraan Baru</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nomor Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Nomor Akta Perkawinan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Nama Suami atau Istri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. NIK Suami atau Istri</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Nomor Paspor</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">7. Nomor Afidavi</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">8. Nomor Keputusan Presiden</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">9. Tanggal/Bulan/Tahun </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">10. Nomor Berita Acara Sumpah/Janji Setia </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">11. Nama Jabatan yang menerbitkan BAS/Janji Setia</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">12. Tanggal/Bulan/Tahun</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">13. Nomor Keputusan Menteri (Bidang Kewarganegaraan)</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">14. Tanggal/Bulan/Tahun</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PERUBAHAN PERISTIWA PENTING LAINNYA</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nomor Akta Kelahiran</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Jenis Kelamin Lama</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Jenis Kelamin Baru</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Nomor Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Tanggal Penetapan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Nama lembaga Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak" style="border: 0.5px solid #000; ">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PEMBETULAN AKTA</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Nomor Akta yang akan dibetulkan/ditarik</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nama Ayah/Ibu/Wali (bagi yang di bawah umur)</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. NIK Ayah/Ibu/Wali</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
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
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nomor Akta yang dibatalkan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Nomor Putusan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Tanggal Putusan Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Nama lembaga Pengadilan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
            </table>
        </div>

        <div class="container font-size jarak-kotak">
            <table class="table-input" style="border-collapse: collapse" width="100%">
                <tr>
                    <td colspan="3"><b>PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI</b></td>
                </tr>
                <tr>
                    <td width="30%">1. Jenis peristiwa penting </td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">2. Nomor Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">3. Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">4. Kantor Perwakilan yang Melakukan pencatatan</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">5. Nomor Bukti Pencatatan Sipil dari Negara Setempat</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
                    <td class="td-input" width="100%" style="display: flex; flex-wrap: wrap;">
                        <?= generateDivBoxes(34, ""); ?></td>
                </tr>
                <tr>
                    <td width="30%">6. Tanggal Penerbitan dari Negara Setempat</td>
                    <td width="1%" style="padding-right: 0px;">:</td>
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
