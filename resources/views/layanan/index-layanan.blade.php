@extends('layouts.app')

@section('container')
    <!-- Layanan -->
    <section>
        <div class="page-section" id="layanan">
            <div class="container">
                <h1 class="page-section-heading text-center text-uppercase mb-3">Layanan</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Surat Keterangan Umum</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ route('layanan.umum.index') }}" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Surat Keterangan Domisili</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Surat Keterangan Usaha</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Surat Rekomendasi BBM</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Akta Kelahiran</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Akta Kematian</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Surat Pindah</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="card h-full flex flex-col">
                            <img src="/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body flex-grow">
                                <h6 class="card-title text-center">Surat Datang</h6>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-primary">Lanjut</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Layanan -->
@endsection
