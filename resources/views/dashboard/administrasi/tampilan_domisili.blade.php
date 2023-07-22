<!DOCTYPE html>
<html>
<head>
    <title>Kop Surat</title>
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
                SURAT KETERANGAN DOMISILI TEMPAT TINGGAL
                </center>
            </td>
        </tr>
        <tr>
            <td><center>
                NOMOR : 475/001/VII/2023
                NOMOR : {{ $domisili->no_surat }}
                </center>
            </td>
        </tr>
        <tr>
            <td><center>
                SURAT KETERANGAN DOMISILI TEMPAT TINGGAL
                </center>
            </td>
        </tr>
    </table>
    </br>
    <table  width="100%" align="right">
        <tr>
            <td align="justify">
                Yang bertanda tangan di bawah ini kami Sekretaris Desa Palar Kecamatan Trucuk
                Kabupaten Klaten Provinsi Jawa Tengah, menerangkan bahwa :
            </td>
        </tr>
    </table>
    </br>
    </br>
    <table border="1" width="100%" align="left">

        <tr>
            <td width="30%" height="20">1. NAMA LENGKAP</td>
            <td width="70%">: {{ $domisili->nama }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">2. JENIS KELAMIN</td>
            <td width="70%">: {{ $domisili->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">3. BINTI</td>
            <td width="70%">: {{ $domisili->binti }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">4. TEMPAT, TANGGAL LAHIR</td>
            <td width="70%"> : {{ $domisili->tmpt_tgl_lahir }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">5. AGAMA</td>
            <td width="70%"> : {{ $domisili->agama }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">6. WARGANEGARA</td>
            <td width="70%"> : {{ $domisili->warganegara }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">7. NO. KTP/NIK</td>
            <td width="70%"> : {{ $domisili->nik }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">8. NO. KARTU KELUARGA</td>
            <td width="70%"> : {{ $domisili->no_kk }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">9. PEKERJAAN</td>
            <td width="70%"> : {{ $domisili->pekerjaan }}</td>
        </tr>
        <tr>
            <td width="30%" height="20">10. ALAMAT</td>
            <td width="70%"> : {{ $domisili->alamat }}</td>
        </tr>
        <tr>
            <td height="10"></td>
        </tr>

    </table>
    <br>
    </br>
    <table width="100%" align="right">
        <tr>
            <td align="justify">
                Berdasarkan Surat Keterangan dari Ketua Rukun Tetangga Nomor 475/RW.006/2/III/2023 Tanggal 20 Maret 2023, bahwa yang bersangkutan benar penduduk Desa Palar Kecamatan Trucuk Kabupaten Klaten yang beralamat pada alamat tersebut di atas, surat ini dibuat untuk keperluan MELAMAR PEKERJAAN DI SHERATON HOTEL YOGYAKARTA.
            </td>
        </tr>
        <tr>
            <td heigt="10">

            </td>
        </tr>
        <tr>
            <td>
            Demikian Surat Keterangan ini kami buat atas permintaan yang bersangkutan agar yang berkepentingan mengetahui dan maklum.
            </td>
        </tr>
    </table>
    <table width="100%" height="100">
        <tr>
            <td></td>
        </tr>
    </table>
    <table width="100%" align="right">
        <tr>
            <td width="900"></td>
            <td align="center" width="300">
                Palar, 20 Maret 2023
            </td>
            <td></td>
        </tr>
        <tr>
            <td width="900"></td>
            <td align="center" width="300">
                a.n. KEPALA DESA PALAR
            </td>
            <td></td>
        </tr>
        <tr>
            <td width="900"></td>
            <td align="center" width="300">
                SEKRETARIS DESA
            </td>
            <td></td>
        </tr>
    </table>
    <table width="100%" height="100" align="right">
        <tr>
            <td width="900"></td>
            <td width="300"></td>
            <td></td>
        </tr>
    </table>
    <table width="100%" align="right">
        <tr>
            <td width="900"></td>
            <td align="center" width="300">
                TUGINO
            </td>
            <td></td>
        </tr>
    </table>
    </div>
</body>
{{-- @endforeach --}}
</html>
