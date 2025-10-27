@extends('layouts.main')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0"> Profile</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current"> Profile</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Instructor Profile Section -->
    <section id="instructor-profile" class="instructor-profile section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-lg-12">
                    <div class="instructor-hero-banner" data-aos="zoom-out" data-aos-delay="200">
                        <div class="hero-background">
                            <img src="{{ isset($user->foto) ? asset('storage/' . $user->foto) : asset('assets/img/person/person-f-1.webp') }}"
                                alt="Background" class="img-fluid">
                            <div class="hero-overlay"></div>
                        </div>
                        <div class="hero-content">
                            <div class="instructor-avatar">
                                <img src="{{ isset($user->foto) ? asset('storage/' . $user->foto) : asset('assets/img/person/person-f-1.webp') }}"
                                    alt="Instructor" class="img-fluid">
                                <div class="status-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>{{ $user->status_kerja }}</span>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h2>{{ $user->name }}</h2>
                                <p class="title">{{ $user->jabatan }} | {{ $user->department }}</p>
                                <div class="credentials">
                                    <span class="credential">{{ $user->jenis_kelamin }}</span>
                                    <span class="credential">{{ $user->tanggal_lahir }}</span>
                                    <span class="credential">{{ $user->email }}</span>
                                </div>
                                <div class="rating-overview">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="rating-text">(5.0)</span>
                                </div>
                                <div class="contact-actions">
                                    <button type="button" class="btn-contact" data-bs-toggle="modal"
                                        data-bs-target="#modalUser">
                                        <i class="bi bi-pencil"></i>
                                        Update Data
                                    </button>
                                    <div class="social-media">
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Instructor Profile Section -->

    <div id="session" data-id="{{ session('success') ?? '' }}"></div>


    <div class="modal fade" id="modalUser" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- bisa tambah modal-lg / modal-sm -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUserLabel">Update Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <form action="{{ route('user.update', $user->id ?? '') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" id="name"
                                value="{{ old('name', $user->name ?? '') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $user->tanggal_lahir ?? '') }}"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror"
                                placeholder="Masukkan alamat lengkap">{{ old('alamat', $user->alamat ?? '') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" name="phone" id="phone"
                                value="{{ old('phone', $user->phone ?? '') }}"
                                class="form-control @error('phone') is-invalid @enderror"
                                placeholder="Masukkan nomor telepon">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="form-select @error('jenis_kelamin') is-invalid @enderror">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki"
                                    {{ old('jenis_kelamin', $user->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="Perempuan"
                                    {{ old('jenis_kelamin', $user->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
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
