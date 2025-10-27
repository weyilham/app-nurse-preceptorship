@extends('layouts.main')
@section('content')
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Form Evaluasi Kepuasan Perawat Baru
            </h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Form Evaluasi Kepuasan Perawat Baru
                    </li>
                </ol>
            </nav>
        </div>

        <section id="enroll" class="enroll section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="enrollment-form-wrapper">

                            <div class="enrollment-header text-center mb-5" data-aos="fade-up" data-aos-delay="200">
                                <h2>Form Evaluasi Penilaian Perawat Baru</h2>
                                <p>Lengkapi Form Penilaian untuk meningkatkan kualitas pelayanan</p>
                            </div>

                            <form action="{{ route('penilaian.simpan') }}" method="POST">
                                @csrf

                                <div class="row">
                                    {{-- form section show users --}}
                                    <div class="col-lg-6 mb-3">
                                        <label for="nama_perawat" class="form-label">Nama Perawat Baru</label>
                                        <select name="user_id" id="nama_perawat"
                                            class="form-select @error('user_id') is-invalid @enderror">
                                            <option value="">-- Pilih Nama Perawat --</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- button --}}
                                    {{-- @if (Auth::user()->jabatan == 'IT' || Auth::user()->jabatan == 'Karu') --}}
                                    <div class="col-lg-6 mb-3 d-flex align-items-end">
                                        <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                                    </div>
                                    {{-- @endif --}}
                                </div>

                                <table class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col" rowspan="2">No</th>
                                            <th scope="col" rowspan="2">Pernyataan</th>
                                            <th scope="col" colspan="5">Skor</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Sangat Tidak Baik</th>
                                            <th scope="col">Tidak Baik</th>
                                            <th scope="col">Cukup Baik</th>
                                            <th scope="col">Baik</th>
                                            <th>Sangat Baik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pernyataan as $index => $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $index + 1 }}</td>
                                                <td class="align-middle">{{ $item->name }}</td>
                                                <td class="text-center">
                                                    <input type="radio" name="score{{ $index + 1 }}" value="1"
                                                        {{ old('score' . ($index + 1)) == '1' ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center">
                                                    <input type="radio" name="score{{ $index + 1 }}" value="2"
                                                        {{ old('score' . ($index + 1)) == '2' ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center">
                                                    <input type="radio" name="score{{ $index + 1 }}" value="3"
                                                        {{ old('score' . ($index + 1)) == '3' ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center">
                                                    <input type="radio" name="score{{ $index + 1 }}" value="4"
                                                        {{ old('score' . ($index + 1)) == '4' ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center">
                                                    <input type="radio" name="score{{ $index + 1 }}" value="5"
                                                        {{ old('score' . ($index + 1)) == '5' ? 'checked' : '' }}>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="row">
                                    {{-- text area saran --}}
                                    <div class="col-lg-12 mb-3">
                                        <label for="saran" class="form-label">Saran dan Masukan</label>
                                        <textarea name="saran" id="saran" rows="4" class="form-control @error('saran') is-invalid @enderror"
                                            placeholder="Masukkan saran dan masukan">{{ old('saran') }}</textarea>
                                        @error('saran')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </form>



                        </div>

                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="enrollment-benefits" data-aos="fade-left" data-aos-delay="400">
                            <h3 class="mb-4">Perawat Baru</h3>

                            @foreach ($users as $user)
                                <div class="benefit-item d-flex align-items-center mb-3 p-2 rounded shadow-sm"
                                    style="background:#f0f8ff; cursor: pointer;" id="selectUser"
                                    data-idUser="{{ $user->id }}">
                                    <div class="benefit-image me-3">
                                        <img src="{{ isset($user->image) ? asset('storage/' . $user->image) : asset('assets/img/person/person-f-1.webp') }}"
                                            alt="Instructor" class="img-fluid rounded-circle"
                                            style="width: 70px; height: 70px; object-fit: cover;">
                                    </div>
                                    <div class="benefit-info ">
                                        <div class="benefit-content ">
                                            <h5 class="mb-0" style="font-weight: 600; font-size: 16px;">
                                                {{ $user->name }}
                                            </h5>
                                            <p class="mb-0 text-muted" style="font-size: 13px;">
                                                {{ 'Karyawan ' . $user->status_kerja }}</p>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>

            </div>

            <div id="session" data-id="{{ session('success') ?? '' }}"></div>

        </section><!-- /Enroll Section -->
    </div>
@endsection
