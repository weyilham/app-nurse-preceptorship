<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ url('/home') }}" class="{{ request()->is('home*') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/module') }}" class="{{ request()->is('module*') ? 'active' : '' }}">Module</a></li>

        <li><a href="{{ url('/evaluasi') }}" class="{{ request()->is('evaluasi*') ? 'active' : '' }}">Evaluasi</a></li>
        <li><a href="{{ url('/diskusi') }}" class="{{ request()->is('diskusi*') ? 'active' : '' }}">Forum</a></li>
        <li><a href="{{ url('/profile') }}" class="{{ request()->is('profile*') ? 'active' : '' }}">Profile</a></li>
        <li><a href="#testimonials">Testimonial</a></li>


    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
