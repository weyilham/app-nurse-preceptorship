@extends('layouts.main')
@section('content')
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Evaluasi Perawat</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Evaluasi Perawat</li>
                </ol>
            </nav>
        </div>

        <section id="instructors" class="instructors section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/model.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="instructor-info">
                                <h5>Kompetensi Perawat Baru</h5>
                                <p class="specialty">Penilaian</p>
                                <p class="description">
                                    Evaluasi ini bertujuan untuk menilai kompetensi dasar perawat baru dalam
                                    menjalankan tugasnya sesuai standar profesi.
                                </p>

                                <div class="action-buttons">
                                    <a href="{{ route('evaluasi.kompetensi') }}" class="btn-view">Mulai Penilaian</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/model2.jpeg" class="img-fluid" alt="">

                            </div>
                            <div class="instructor-info">
                                <h5>Form Evaluasi Kepuasan Perawat Baru</h5>
                                <p class="specialty">Evaluasi</p>
                                <p class="description">
                                    Form ini digunakan untuk mengumpulkan umpan balik dari perawat baru mengenai
                                    pengalaman mereka selama masa orientasi dan pelatihan.
                                </p>

                                <div class="action-buttons">
                                    <a href="{{ route('evaluasi.form') }}" class="btn-view">Mulai Evaluasi</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Instructors Section -->
    </div>
@endsection
