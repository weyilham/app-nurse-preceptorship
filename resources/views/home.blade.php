@extends('layouts.main')

@section('content')
    <!-- Courses Hero Section -->
    <section id="courses-hero" class="courses-hero section light-background">

        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="hero-text">
                            <h1>APLIKASI NURSE <span class="text-primary">PRECEPTORSHIP</span> </h1>
                            <p>Platform digital pembelajaran dan evaluasi bagi perawat dan peserta
                                bimbingan rumah sakit.
                                Tingkatkan kompetensi, refleksi, dan kualitas pelayanan keperawatan melalui
                                bimbingan terstruktur.</p>

                            <div class="hero-stats">
                                <div class="stat-item">
                                    <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="150"
                                        data-purecounter-duration="2"></span>
                                    <span class="label">Nurses</span>
                                </div>
                                <div class="stat-item">
                                    <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="125"
                                        data-purecounter-duration="2"></span>
                                    <span class="label">Certified Nurses</span>
                                </div>
                                <div class="stat-item">
                                    <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="98"
                                        data-purecounter-duration="2"></span>
                                    <span class="label">Success %</span>
                                </div>
                            </div>

                            <div class="hero-buttons">
                                <a href="#featured-courses" class="btn btn-primary">Mulai Belajar</a>
                            </div>

                            <div class="hero-features">
                                <div class="feature">
                                    <i class="bi bi-shield-check"></i>
                                    <span>100% Secure</span>
                                </div>
                                <div class="feature">
                                    <i class="bi bi-clock"></i>
                                    <span>24/7 Support</span>
                                </div>
                                <div class="feature">
                                    <i class="bi bi-people"></i>
                                    <span>Expert Instructors</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="hero-image">
                            <div class="main-image">
                                <img src="assets/img/cover.jpg" alt="Online Learning" class="img-fluid">
                            </div>

                            <div class="floating-cards">
                                <div class="course-card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card-icon">
                                        <i class="bi bi-briefcase"></i>
                                    </div>
                                    <div class="card-content">
                                        <h6>Tingkatkan Refleksi</h6>
                                        <span>Nurse Preceptorship</span>
                                    </div>
                                </div>

                                <div class="course-card" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="card-content">
                                        <h6>Kualitas Pelayanan</h6>
                                        <span>Nurse Preceptorship</span>
                                    </div>
                                </div>

                                <div class="course-card" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card-icon">
                                        <i class="bi bi-graph-up"></i>
                                    </div>
                                    <div class="card-content">
                                        <h6>Tingkatkan Kompetensi</h6>
                                        <span>Nurse Preceptorship</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="hero-background">
            <div class="bg-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </div>

    </section><!-- /Courses Hero Section -->

    <!-- Featured Courses Section -->
    <section id="featured-courses" class="featured-courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fitur Aplikasi</h2>
            <p>Beberapa Fitur Aplikasi Untuk Meningkatkan Kualitas Pelayanan</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="assets/img/module.jpg" alt="Course" class="img-fluid">
                            <div class="badge featured">Module</div>
                            <div class="price-badge">E-Book</div>
                        </div>
                        <div class="course-content">

                            <h3><a href="#">Ebook Nurse Preceptorship</a></h3>
                            <p>
                                Panduan komprehensif bagi preseptor dan perawat baru dalam memahami proses
                                pembelajaran klinik.
                                Ebook ini membahas konsep, strategi, serta praktik terbaik dalam bimbingan
                                keperawatan yang efektif.
                                Didesain untuk membantu perawat meningkatkan kompetensi, refleksi profesional, dan
                                kualitas pelayanan di lingkungan klinik.
                            </p>
                            <div class="course-stats">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span>(5.0)</span>
                                </div>
                                <div class="students">
                                    <i class="bi bi-people-fill"></i>
                                    <span>342 Nurse</span>
                                </div>
                            </div>
                            <a href="{{ url('/module') }}" class="btn-course">Read Now</a>
                        </div>
                    </div>
                </div><!-- End Course Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="assets/img/evaluasi.jpg" alt="Course" class="img-fluid">
                            <div class="badge new">Evaluasi</div>
                            <div class="price-badge">Learning</div>
                        </div>
                        <div class="course-content">

                            <h3><a href="#">Evaluasi Perawat</a></h3>
                            <p>
                                Fitur ini membantu menilai kinerja perawat secara objektif dan terstruktur melalui
                                berbagai indikator kompetensi klinik.
                                Evaluasi dilakukan berdasarkan observasi langsung, refleksi, dan umpan balik dari
                                preseptor,
                                sehingga mendukung pengembangan profesional berkelanjutan dan peningkatan mutu
                                pelayanan keperawatan.
                            </p>


                            <div class="course-stats">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span>(5.0)</span>
                                </div>
                                <div class="students">
                                    <i class="bi bi-people-fill"></i>
                                    <span>100 evaluasi</span>
                                </div>
                            </div>
                            <a href="{{ url('/evaluasi') }}" class="btn-course">Evaluasi</a>
                        </div>
                    </div>
                </div><!-- End Course Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="assets/img/diskusi.jpg" alt="Course" class="img-fluid">
                            <div class="badge certificate">Diskusi</div>
                            <div class="price-badge">Forum</div>
                        </div>
                        <div class="course-content">

                            <h3><a href="#">Diskusi</a></h3>
                            <p>
                                Ruang interaktif bagi preseptor dan perawat untuk berbagi pengalaman, studi kasus,
                                serta solusi praktik klinik.
                                Melalui fitur diskusi ini, pengguna dapat saling bertukar pengetahuan, memperluas
                                wawasan,
                                dan membangun komunitas pembelajaran keperawatan yang kolaboratif.
                            </p>


                            <div class="course-stats">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span>(5.0)</span>
                                </div>
                                <div class="students">
                                    <i class="bi bi-people-fill"></i>
                                    <span>100+ Diskusi</span>
                                </div>
                            </div>
                            <a href="{{ url('/diskusi') }}" class="btn-course">Diskusi</a>
                        </div>
                    </div>
                </div><!-- End Course Item -->

            </div>

        </div>

    </section><!-- /Featured Courses Section -->


    <!-- Foto Mahasiswa -->
    {{-- <section id="featured-instructors" class="featured-instructors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Featured Instructors</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/education/teacher-2.webp" class="img-fluid" alt="">
                                <div class="overlay-content">
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>4.8</span>
                                    </div>
                                    <div class="course-count">
                                        <i class="bi bi-play-circle"></i>
                                        <span>18 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h5>Sarah Johnson</h5>
                                <p class="specialty">Web Development</p>
                                <p class="description">Nulla facilisi morbi tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida.</p>
                                <div class="stats-grid">
                                    <div class="stat">
                                        <span class="number">2.1k</span>
                                        <span class="label">Students</span>
                                    </div>
                                    <div class="stat">
                                        <span class="number">4.8</span>
                                        <span class="label">Rating</span>
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <a href="#" class="btn-view">View Profile</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/education/teacher-7.webp" class="img-fluid" alt="">
                                <div class="overlay-content">
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span>4.9</span>
                                    </div>
                                    <div class="course-count">
                                        <i class="bi bi-play-circle"></i>
                                        <span>24 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h5>Michael Chen</h5>
                                <p class="specialty">Data Science</p>
                                <p class="description">Suspendisse potenti nullam ac tortor vitae purus faucibus ornare
                                    suspendisse sed nisi.</p>
                                <div class="stats-grid">
                                    <div class="stat">
                                        <span class="number">3.5k</span>
                                        <span class="label">Students</span>
                                    </div>
                                    <div class="stat">
                                        <span class="number">4.9</span>
                                        <span class="label">Rating</span>
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <a href="#" class="btn-view">View Profile</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-github"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/education/teacher-4.webp" class="img-fluid" alt="">
                                <div class="overlay-content">
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span>4.6</span>
                                    </div>
                                    <div class="course-count">
                                        <i class="bi bi-play-circle"></i>
                                        <span>15 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h5>Amanda Rodriguez</h5>
                                <p class="specialty">UX Design</p>
                                <p class="description">Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis.</p>
                                <div class="stats-grid">
                                    <div class="stat">
                                        <span class="number">1.8k</span>
                                        <span class="label">Students</span>
                                    </div>
                                    <div class="stat">
                                        <span class="number">4.6</span>
                                        <span class="label">Rating</span>
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <a href="#" class="btn-view">View Profile</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-dribbble"></i></a>
                                        <a href="#"><i class="bi bi-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/education/teacher-9.webp" class="img-fluid" alt="">
                                <div class="overlay-content">
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>4.7</span>
                                    </div>
                                    <div class="course-count">
                                        <i class="bi bi-play-circle"></i>
                                        <span>21 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h5>David Thompson</h5>
                                <p class="specialty">Digital Marketing</p>
                                <p class="description">Vivamus magna justo lacinia eget consectetur sed convallis at
                                    tellus curabitur non nulla.</p>
                                <div class="stats-grid">
                                    <div class="stat">
                                        <span class="number">2.9k</span>
                                        <span class="label">Students</span>
                                    </div>
                                    <div class="stat">
                                        <span class="number">4.7</span>
                                        <span class="label">Rating</span>
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <a href="#" class="btn-view">View Profile</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section> --}}

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Testimonials From Our Users</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-12">
                    <div class="critic-reviews" data-aos="fade-up" data-aos-delay="300">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="critic-review text-center">
                                    <div class="review-quote">"</div>
                                    <div class="stars mb-2">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        Aplikasi ini sangat membantu saya dalam membimbing perawat baru.
                                        Proses evaluasi jadi lebih mudah dan terarah, serta semua data tersimpan
                                        dengan rapi.
                                    </p>
                                    <div class="critic-info mt-3">
                                        <div class="critic-name fw-bold">Sr. Dina Putri, S.Kep., Ns</div>
                                        <div class="text-muted">Preseptor Keperawatan – RSUD Bandung</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="critic-review text-center">
                                    <div class="review-quote">"</div>
                                    <div class="stars mb-2">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <p>
                                        Materi pembelajarannya mudah dipahami dan sesuai dengan praktik klinik
                                        sehari-hari.
                                        Saya jadi lebih percaya diri dalam menjalani program preceptorship.
                                    </p>
                                    <div class="critic-info mt-3">
                                        <div class="critic-name fw-bold">Rani Nurhaliza</div>
                                        <div class="text-muted">Perawat Baru – Program Preceptorship 2025</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="critic-review text-center">
                                    <div class="review-quote">"</div>
                                    <div class="stars mb-2">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        Dengan fitur diskusi dan laporan digital, komunikasi antara preseptor dan
                                        peserta menjadi lebih efektif.
                                        Platform ini benar-benar mendukung pembelajaran klinik modern.
                                    </p>
                                    <div class="critic-info mt-3">
                                        <div class="critic-name fw-bold">Dr. Anwar Hidayat, S.Kep., M.Kep</div>
                                        <div class="text-muted">Kepala Bidang Keperawatan – RS Harapan Sehat</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="testimonials-container">
                        <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="400">
                            <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      }
                    }
                  }
                </script>

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Program Nurse Preceptorship ini sangat membantu saya dalam memahami
                                            proses pembelajaran klinik.
                                            Materinya mudah diikuti dan aplikatif untuk praktik keperawatan
                                            sehari-hari.
                                        </p>
                                        <div class="testimonial-profile">
                                            <img src="assets/img/person/person-f-1.webp" alt="Reviewer"
                                                class="img-fluid rounded-circle">
                                            <div>
                                                <h3>Siti Rahmawati</h3>
                                                <h4>Perawat Pelaksana</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Aplikasi ini mempermudah proses evaluasi dan bimbingan bagi perawat
                                            baru.
                                            Semua data terekam dengan rapi dan bisa diakses kapan saja oleh
                                            preceptor.
                                        </p>
                                        <div class="testimonial-profile">
                                            <img src="assets/img/person/person-m-2.webp" alt="Reviewer"
                                                class="img-fluid rounded-circle">
                                            <div>
                                                <h3>Andi Pratama</h3>
                                                <h4>Manajer Keperawatan</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <p>
                                            Saya senang dengan fitur diskusi yang interaktif. Kami bisa saling
                                            berbagi pengalaman antar perawat,
                                            terutama terkait kasus keperawatan yang kompleks.
                                        </p>
                                        <div class="testimonial-profile">
                                            <img src="assets/img/person/person-f-3.webp" alt="Reviewer"
                                                class="img-fluid rounded-circle">
                                            <div>
                                                <h3>Nur Aisyah</h3>
                                                <h4>Perawat Pelaksana</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>
                                            Dashboard evaluasinya sangat intuitif. Saya bisa melihat perkembangan
                                            setiap perawat bimbingan
                                            dengan jelas dan menilai kompetensi secara objektif.
                                        </p>
                                        <div class="testimonial-profile">
                                            <img src="assets/img/person/person-m-4.webp" alt="Reviewer"
                                                class="img-fluid rounded-circle">
                                            <div>
                                                <h3>Drs. Budi Santoso, M.Kep</h3>
                                                <h4>Kepala Bidang Keperawatan</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
