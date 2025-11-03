@push('styles')
    <style type="text/css">
        .active-card-user {
            background-color: #d0e7ff !important;
            border: 2px solid #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
            transition: 0.3s;
        }
    </style>
@endpush
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
                                    @if (Auth::user()->jabatan == 'IT' || Auth::user()->jabatan == 'Karu')
                                        <div class="col-lg-6 mb-3 d-flex align-items-end">
                                            <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                                        </div>
                                    @endif
                                </div>

                                <table class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Pernyataan</th>
                                            <th colspan="5">Skor</th>
                                        </tr>
                                        <tr>
                                            <th>Sangat Tidak Baik</th>
                                            <th>Tidak Baik</th>
                                            <th>Cukup Baik</th>
                                            <th>Baik</th>
                                            <th>Sangat Baik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pernyataan as $index => $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $index + 1 }}</td>
                                                <td class="align-middle">{{ $item->name }}</td>

                                                @for ($i = 1; $i <= 5; $i++)
                                                    <td class="text-center">
                                                        <input type="radio" name="score[{{ $item->id }}]"
                                                            value="{{ $i }}"
                                                            {{ old('score.' . $item->id) == $i ? 'checked' : '' }} required>
                                                    </td>
                                                @endfor
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
                                <div class="benefit-item d-flex align-items-center mb-3 p-2 rounded shadow-sm selectUser cardUser{{ $user->id }}"
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
            $(document).on('click', '#selectUser', function(e) {
                var idUser = $(this).data('iduser');
                $('#nama_perawat').val(idUser).trigger('change');
            })

            // Event ketika card diklik
            $(document).on('click', '[id^="selectUser"]', function() {
                const idUser = $(this).data('iduser');

                // Hapus kelas active dari semua card
                $('[id^="selectUser"]').removeClass('active-card-user');

                // Tambahkan kelas active pada card yang diklik
                $(this).addClass('active-card-user');

                // Jalankan AJAX untuk ambil data penilaian
                $.ajax({
                    type: 'GET',
                    url: "{{ url('evaluasi/penilaian') }}/" + idUser,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);

                        // Reset form
                        $('input[type="radio"]').prop('checked', false);
                        $('#saran').val('');

                        if (response.status && response.data.length > 0) {
                            // Isi nilai score
                            response.data.forEach(function(item) {
                                const pertanyaanId = item.kepuasan_perawat_id;
                                const score = item.score;

                                $(`input[name="score[${pertanyaanId}]"][value="${score}"]`)
                                    .prop('checked', true);
                            });

                            // Isi saran
                            if (response.data[0].saran) {
                                $('#saran').val(response.data[0].saran);
                            }
                        } else {
                            Swal.fire({
                                icon: 'info',
                                title: 'Info',
                                text: 'Belum ada data penilaian untuk perawat ini.',
                                timer: 3000,
                                timerProgressBar: true,
                                showConfirmButton: false,
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan saat memuat data.',
                        });
                    }
                });
            });





        });
    </script>
@endpush
