@extends('layouts.app')

@section('container')
<!-- Home -->
<section class="page-section text-center mb-5" id="home">
    <div class="container">
        <h1 class="text-uppercase mb-0">Selamat Datang Di website</h1>
        <img class="mt-5 mb-5" src="/img/logo_klaten.png" width="300" alt="..." />
        <h1 class="masthead-heading text-uppercase mb-1">Pemerintah Desa Palar</h1>
        <p class="masthead-subheading font-weight-light ">Desa Palar - Kecamatan Trucuk - Kabupaten Klaten - Provinsi Jawa Tengah</p>
    </div>
</section>
<!-- Akhir Home -->
<br><br>
<!-- Berita -->
<section>
    <div class="page-section text-black mb-3 mt-7" id="berita">
        <div class="container">
            <h2 class="page-section-heading text-center  mb-3">BERITA</h2>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="/img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="/img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="/img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Berita -->
@endsection
