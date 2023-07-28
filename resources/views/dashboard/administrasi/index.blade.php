<!DOCTYPE html>
<html>
<head>
    <title>Contoh Tampilan Surat</title>
    <style>
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            border: 1px solid #000;
            width: 30px;
            height: 30px;
            margin: 2px;
        }

        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contoh Tampilan Surat</h1>
        <div class="row">
            @for($i = 0; $i < 10; $i++)
                <div class="box"></div>
            @endfor
        </div>
        <div class="content">
            <!-- Isi surat atau konten lainnya dapat ditambahkan di sini -->
        </div>
    </div>
</body>
</html>
