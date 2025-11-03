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
            <h1 class="mb-2 mb-lg-0">Kompetensi Perawat Baru</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Kompetensi Perawat Baru
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
                                <h2>Form Kopetensi Perawat Baru</h2>
                                <p>Lengkapi Form Kompetensi Perawat Baru untuk meningkatkan kualitas pelayanan</p>
                            </div>

                            <form action="{{ route('penilaian.store') }}" method="POST">
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
                                            <th scope="col" rowspan="2">No</th>
                                            <th scope="col" rowspan="2">Aspek Kompetensi</th>
                                            <th scope="col" rowspan="2">Kriteria Penilaian</th>
                                            <th scope="col" colspan="4">Skor</th>
                                            <th scope="col" rowspan="2">Catatan Preceptor</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">1</th>
                                            <th scope="col">2</th>
                                            <th scope="col">3</th>
                                            <th scope="col">4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kompetensi as $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $item->aspek }}</td>
                                                <td class="align-middle">{{ $item->kriteria }}</td>
                                                <td class="text-center align-middle">
                                                    <input type="radio" name="skor_{{ $item->id }}" value="1"
                                                        {{ old('skor_' . $item->id) == 1 ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="radio" name="skor_{{ $item->id }}" value="2"
                                                        {{ old('skor_' . $item->id) == 2 ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="radio" name="skor_{{ $item->id }}" value="3"
                                                        {{ old('skor_' . $item->id) == 3 ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="radio" name="skor_{{ $item->id }}" value="4"
                                                        {{ old('skor_' . $item->id) == 4 ? 'checked' : '' }}>
                                                </td>
                                                <td class="align-middle">
                                                    <input type="text" class="form-control"
                                                        name="catatan_{{ $item->id }}"
                                                        value="{{ old('catatan_' . $item->id) }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>


                            <div class="row">
                                <p>Skor Penilaian :</p>
                                <div class="col-lg-6">

                                    <ul>
                                        <li>1 = Belum Mampu</li>
                                        <li>2 = Mampu dengan bimbingan intensif</li>
                                        <li>3 = Mampu dengan supervisi minimal</li>
                                        <li>4 = Mampu mandiri sesuai standar</li>
                                    </ul>
                                </div>
                            </div>
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

            $(document).on('click', '[id^="selectUser"]', function() {
                const idUser = $(this).data('iduser');
                $('[id^="selectUser"]').removeClass('active-card-user');
                $(this).addClass('active-card-user');


                $.ajax({
                    type: 'GET',
                    url: "{{ url('evaluasi/kompetensi') }}/" + idUser,
                    dataType: 'json',
                    success: function(response) {

                        // Reset dulu semua skor dan catatan sebelumnya
                        $('input[type=radio]').prop('checked', false);
                        $('input[type=text]').val('');

                        // Jika ada data di DB
                        if (response.status && response.data.length > 0) {

                            response.data.forEach(function(item) {
                                // Cth name = skor_1, skor_2, ...
                                $('input[name="skor_' + item.evaluasi_kompetensi_id +
                                    '"][value="' + item.skor + '"]').prop('checked',
                                    true);

                                // Cth name = catatan_1, catatan_2, ...
                                $('input[name="catatan_' + item.evaluasi_kompetensi_id +
                                    '"]').val(item.catatan);
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                    }
                });
            });

        });
    </script>
@endpush
