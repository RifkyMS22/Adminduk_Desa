<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Umum</title>
</head>


<body>
    <div class="container">
    <table  align="center" width="100%">
        <tr>
        <td width="90px">
            <center>
            <img src="https://klatenkab.go.id/wp-content/uploads/2018/03/Lambang.png" width="80px" style="object-fit: contain">
            </center>
        </td>
        <td width="100%">
            <center>
                <font size="4">PEMERINTAH KABUPATEN KLATEN</font><br>
                <font size="4">KECAMATAN TRUCUK</font><br>
                <font size="5">DESA PALAR</font><br>
                <font size="2"><i>JL. JURUSAN MAKAM RONGGOWARSITO</i></font><br>
                <font size="2"><i>DALEMAN, PALAR, TRUCUK. KODEPOS : 57467</i></font><br>
            </center>
        </td>
        <td width="90px">
            <center>
                <img src="https://klatenkab.go.id/wp-content/uploads/2018/03/Lambang.png" width="80px" style="object-fit: contain; visibility: hidden">
                </center>
        </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
    </table>
    <table  align="center" width="100%">
        <tr>
            <td><center>
                SURAT KETERANGAN
                </center>
            </td>
        </tr>
        <tr>
            <td><center>
                NOMOR : {{ $keteranganUmum->no_surat }}
                </center>
            </td>
        </tr>

    </table>
    </br>
    <table  width="100%" align="right">
        <tr>
            <td align="justify">
                <a style="color:white">yang</a>Yang bertanda tangan di bawah ini kami Sekretaris Desa Palar Kecamatan Trucuk
                Kabupaten Klaten Provinsi Jawa Tengah, menerangkan bahwa :
            </td>
        </tr>
    </table>
    </br>
    <table width="100%" align="left">

        <tr>
            <td width="40%" height="20">1. NAMA</td>
            <td width="60%">: {{ $keteranganUmum->nama }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">2. JENIS KELAMIN</td>
            <td width="60%">: {{ $keteranganUmum->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">3. TEMPAT, TANGGAL LAHIR</td>
            <td width="60%"> : {{ $keteranganUmum->tmpt_tgl_lahir }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">4. WARGANEGARA</td>
            <td width="60%"> : {{ $keteranganUmum->warganegara }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">5. AGAMA</td>
            <td width="60%"> : {{ $keteranganUmum->agama }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">6. PEKERJAAN</td>
            <td width="60%"> : {{ $keteranganUmum->pekerjaan }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">7. TEMPAT TINGGAL</td>
            <td width="60%"> : {{ $keteranganUmum->alamat }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">8. SURAT BUKTI DIRI</td>
            <td width="60%"> : NIK  <a style="color:white">.....</a>:{{ $keteranganUmum->nik }}</td>
        </tr>
        <tr>
            <td width="40%" height="20"></td>
            <td width="60%">  <a style="color:white">:</a> NO KK :{{ $keteranganUmum->no_kk }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">9. KEPERLUAN</td>
            <td width="60%"> : {{ $keteranganUmum->keperluan }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">10. BERLAKU</td>
            <td width="60%"> : {{ $keteranganUmum->alamat }}</td>
        </tr>
        <tr>
            <td width="40%" height="20">11.  KETERANGAN LAIN</td>
            <td width="60%"> : {{ $keteranganUmum->ket_lain }}</td>
        </tr>

    </table>

    </br>
    <table width="100%" align="right">
        <tr>
            <td heigt="10">

            </td>
        </tr>
        <tr>
            <td>
                <a style="color:white">yang</a>Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan seperlunya.
            </td>
        </tr>
    </table>
    <table width="100%" height="100">
        <tr>
            <td></td>
        </tr>
    </table>
    </br>
    <table width="100%" align="right">
        <tr>
            <td width="60%"></td>
            <td align="center" width="30%">
                Palar, 20 Maret 2023
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="60%"></td>
            <td align="center" width="30%">
                a.n. KEPALA DESA PALAR
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="60%"></td>
            <td align="center" width="30%">
                SEKRETARIS DESA
            </td>
            <td width="10%"></td>
        </tr>
    </table>
    <table width="100%" height="100%" align="right">
        <tr>
            <td height="7%" width="60%"></td>
            <td height="7%" width="30%"></td>
            <td height="7%" width="10%"></td>
        </tr>
    </table>
    <table width="100%" align="right">
        <tr>
            <td width="60%"></td>
            <td align="center" width="30%">
                TUGINO
            </td>
            <td width="10%"></td>
        </tr>
    </table>
    </div>
</body>
</html>
