@extends('layouts.main')
@section('content')
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Forum Diskusi</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Forum Diskusi</li>
                </ol>
            </nav>
        </div>

        <section id="blog-posts" class="blog-posts section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    @foreach ($forums as $forum)
                        <div class="col-lg-4">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $forum->gambar) }}" class="img-fluid" alt="">
                                </div>

                                <div class="meta d-flex align-items-end">
                                    <span class="post-date"><span>{{ $forum->created_at->format('d') }}</span>
                                        {{ $forum->created_at->format('M') }}</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span
                                            class="ps-2">{{ $forum->userPenulis->name }}</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">{{ $forum->kategori }}</span>
                                    </div>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ $forum->judul }}</h3>
                                    <a href="{{ route('diskusi.show', $forum->id) }}"
                                        class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>

                                </div>

                            </article>
                        </div>
                    @endforeach


                </div>
            </div>

        </section><!-- /Blog Posts Section -->
    </div>
@endsection
