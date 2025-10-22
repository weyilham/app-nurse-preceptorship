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

        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section">
            <div class="container" data-aos="fade-up">

                <article class="article">
                    <div class="article-header">
                        <div class="meta-categories" data-aos="fade-up">
                            <a href="#" class="category">{{ $forum->kategori }}</a>
                        </div>

                        <h1 class="title" data-aos="fade-up" data-aos-delay="100">{{ $forum->judul }}</h1>

                        <div class="article-meta" data-aos="fade-up" data-aos-delay="200">
                            <div class="author">
                                <img src="{{ asset('storage/' . $forum->userPenulis->foto) }}" alt="Author"
                                    class="author-img">
                                <div class="author-info">
                                    <h4>{{ $forum->userPenulis->name }}</h4>
                                    <span>{{ $forum->userPenulis->role }}</span>
                                </div>
                            </div>
                            <div class="post-info">
                                <span><i class="bi bi-clock"></i> {{ $forum->created_at->diffForHumans() }}</span>
                                <span><i class="bi bi-calendar4-week"></i> {{ $forum->created_at }}</span>
                                <span><i class="bi bi-chat-square-text"></i> {{ $forum->comments()->count() }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="article-featured-image" data-aos="zoom-in">
                        <img src="{{ asset('storage/' . $forum->gambar) }}" alt="UI Design Evolution" class="img-fluid">
                    </div>

                    <div class="article-body">

                        <p>
                            {!! $forum->deskripsi !!}
                        </p>

                    </div>



                </article>

            </div>
        </section><!-- /Blog Details Section -->

        <!-- Blog Comments Section -->
        <section id="blog-comments" class="blog-comments section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="blog-comments-4">
                    <div class="comments-header">
                        <h3 class="title">Community Feedback</h3>
                        <div class="comments-stats">
                            <span class="count">{{ $forum->comments()->count() }}</span>
                            <span class="label">Comments</span>
                        </div>
                    </div>

                    <div class="comments-container">
                        <!-- Comment #1 -->
                        @if ($forum->comments()->count() > 0)
                            @foreach ($forum->comments as $comment)
                                <div class="comment-thread">
                                    <div class="comment-box">
                                        <div class="comment-wrapper">
                                            <div class="avatar-wrapper">
                                                <img src="{{ asset('storage/' . $forum->userPenulis->foto) }}"
                                                    alt="Avatar" loading="lazy">
                                                <span class="status-indicator"></span>
                                            </div>

                                            <div class="comment-content">
                                                <div class="comment-header">
                                                    <div class="user-info">
                                                        <h4>{{ $comment->user->name }}</h4>
                                                        <span class="time-badge">
                                                            <i class="bi bi-clock"></i>
                                                            {{ $comment->created_at->diffForHumans() }}
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="comment-body">
                                                    <p>{{ $comment->comment }}.</p>
                                                </div>

                                                <div class="comment-actions">
                                                    <button class="action-btn like-btn" aria-label="Like comment">
                                                        <i class="bi bi-heart"></i>
                                                        <span>Like</span>
                                                    </button>
                                                    <button class="action-btn reply-btn" aria-label="Reply to comment">
                                                        <i class="bi bi-chat"></i>
                                                        <span>Reply</span>
                                                    </button>
                                                    <button class="action-btn share-btn" aria-label="Share comment">
                                                        <i class="bi bi-share"></i>
                                                        <span>Share</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>

            </div>

        </section><!-- /Blog Comments Section -->

        <!-- Blog Comment Form Section -->
        <section id="blog-comment-form" class="blog-comment-form section">
            <div class="container">

                <form action="{{ route('comment.store') }}" method="POST">
                    @csrf
                    <h4>Post Comment</h4>
                    <p>Silahkan berkomentar yang baik dan bijak </p>
                    <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Your Name*" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col form-group">
                            <textarea name="comment" class="form-control @error('comment') is-invalid @enderror" placeholder="Your Comment*">{{ old('comment') }}</textarea>
                            @error('comment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>

                </form>

            </div>
        </section><!-- /Blog Comment Form Section -->

        <div id="session" data-id="{{ session('success') ?? '' }}"></div>


    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var session = $('#session').data('id');
            if (session) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: session,
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                });
            }
        });
    </script>
@endpush
