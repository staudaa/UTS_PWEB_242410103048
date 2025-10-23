@php
    $username = request()->query('username');
    $password = request()->query('password');
@endphp

<div class="d-flex">
    <aside class="sidebar">
        <div class="sidebar-header  text-center mb-3">
            <div class="sidebar-logo">
                <i class="bi bi-flower1"></i>
                <span>Bloomify</span>
            </div>
            <p class="sidebar-sub">Admin Panel</p>
        </div>

        <nav>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                        href="{{ url('/dashboard?username=' . ($username ?? '') . '&password=' . ($password ?? '')) }}">
                        <i class="bi bi-house-door"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengelolaan') ? 'active' : '' }}"
                        href="{{ url('/pengelolaan?username=' . ($username ?? '') . '&password=' . ($password ?? '')) }}">
                        <i class="bi bi-box-seam"></i> Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                        href="{{ url('/profile?username=' . ($username ?? '') . '&password=' . ($password ?? '')) }}">
                        <i class="bi bi-person-circle"></i> Profil
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="main-area w-100 d-flex flex-column">
        <header class="topbar d-flex justify-content-between align-items-center px-4 py-2">
            <div class="fw-semibold text-pink">Selamat datang, {{ $username ?? 'Admin' }}!</div>
            <div class="text-muted">Bloomify Admin</div>
        </header>
        <main class="content">
            @yield('content')
        </main>
    </div>
</div>
