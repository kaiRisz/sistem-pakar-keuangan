<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | {{ config('app.name') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ route('landing') }}">Sistem Pakar Keuangan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Masuk</a></li>
                    <li class="nav-item">
                        <a class="btn btn-success btn-sm" href="{{ route('register') }}">Daftar</a>
                    </li>
                @else
                    <li class="nav-item">
                        @if(auth()->user()->isAdmin())
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Panel Admin</a>
                        @else
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        @endif
                    </li>
                    <li class="nav-item text-white-50 small px-lg-2">{{ auth()->user()->name }}</li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline-light btn-sm">Keluar</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    <div class="container py-4">
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
    </div>
    @yield('content')
</main>

<footer class="bg-white border-top py-3 mt-auto">
    <div class="container small text-muted text-center">
        &copy; {{ date('Y') }} Sistem Pakar Keuangan Mahasiswa. Hasil analisis bersifat edukatif, bukan nasihat keuangan profesional.
    </div>
</footer>

</body>
</html>