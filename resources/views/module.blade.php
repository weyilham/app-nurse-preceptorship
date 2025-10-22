@extends('layouts.main')
@section('content')
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Module</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Module</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="courses-2" class="courses-2 section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-3">
                    <div class="course-filters" data-aos="fade-right" data-aos-delay="100">
                        <h4 class="filter-title">Fitur Module</h4>

                        <div class="filter-group">

                            <div class="filter-options">
                                <label class="filter-checkbox">
                                    terdapat beberapa pilihan module atau ebook pembelajaran yang bisa diakses sesuai
                                    kebutuhan
                                </label>

                            </div>
                        </div>
                    </div><!-- End Course Filters -->
                </div>

                <div class="col-lg-9">

                    <div class="courses-grid" data-aos="fade-up" data-aos-delay="200">
                        <div class="row">
                            {{-- foreach --}}

                            @foreach ($modules as $module)
                                <div class="col-lg-6 col-md-6">
                                    <div class="course-card">
                                        <div class="course-image">
                                            <img src="assets/img/read.jpg" alt="Course" class="img-fluid">
                                            <div class="course-badge">Ebook</div>
                                            <div class="course-price">PDF</div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-meta">
                                                <span class="category">Pembelajaran</span>
                                            </div>
                                            <h3>{{ $module->name }}</h3>
                                            <p>{{ $module->description }}</p>
                                            <div class="course-stats">
                                                <div class="stat">
                                                    <i class="bi bi-clock"></i>
                                                    <span>{{ $module->created_at->diffForHumans() }}</span>
                                                </div>
                                                <div class="stat">
                                                    <i class="bi bi-people"></i>
                                                    <span>1,245 students</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                    <span>4.8 (89 reviews)</span>
                                                </div>
                                            </div>
                                            <div class="instructor-info">

                                                <span class="instructor-name"> <i class="bi bi-person"></i>
                                                    {{ auth()->user()->name }}</span>
                                            </div>
                                            <a href="{{ asset('storage/' . $module->file) }}" class="btn-course">Read
                                                Now</a>
                                        </div>
                                    </div><!-- End Course Card -->
                                </div>
                            @endforeach

                            {{-- endforeach --}}

                        </div>
                    </div><!-- End Courses Grid -->



                </div>
            </div>

        </div>

    </section><!-- /Courses 2 Section -->
@endsection
