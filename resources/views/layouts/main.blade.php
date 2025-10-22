<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ url('/home') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename"> <i class="bi bi-book"></i> Nurse</h1>

            </a>

            @include('layouts.partials.navbar')


            <form action="{{ route('filament.admin.auth.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn-getstarted">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>


        </div>
    </header>

    <main class="main">

        @yield('content')

    </main>

    @include('layouts.partials.footer')



</body>

</html>
