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
 <!-- Pemerintahan Section-->
 <section class="page-section" id="pemerintahan">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-black mb-5">Pemerintahan</h2>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="p-3 fs-2 text-center">Visi</div>
                    <div class="card-body text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus saepe expedita obcaecati maxime culpa alias ab ipsam voluptas veniam ut, iure blanditiis vitae aspernatur earum sed accusantium dignissimos illo officiis doloremque nihil? Architecto consequuntur quia repudiandae eos blanditiis explicabo enim ratione dignissimos velit quae sint cum expedita rerum, ipsum nulla.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="p-3 fs-2 text-center">Misi</div>
                    <div class="card-body text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus saepe expedita obcaecati maxime culpa alias ab ipsam voluptas veniam ut, iure blanditiis vitae aspernatur earum sed accusantium dignissimos illo officiis doloremque nihil? Architecto consequuntur quia repudiandae eos blanditiis explicabo enim ratione dignissimos velit quae sint cum expedita rerum, ipsum nulla.
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Visi Misi -->
        <br><br>
        <!-- Bagan -->
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="p-3 fs-2 text-center">Bagan</div>
                    <div class="card-body text-center">
                        <img src="/img/3.jpg" class="card-img-top" alt="..." width="50" height="400">
                    </div>
                </div>
            </div>
        <!-- Akhir Bagan -->
    </div>     
</section>
<!-- Akhir Pemerintahan Section -->
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
<br><br>
 <!-- Layanan -->
 <div class="page-section" id="layanan">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase mb-3">Layanan</h2>
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
<!-- Akhir Layanan -->

@endsection
