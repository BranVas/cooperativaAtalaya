<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- CoreUI CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.0/dist/css/coreui.min.css">

    {{-- Fonts --}}
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
</head>
<body class="c-app d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <header class="c-header border-bottom mb-4">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <h1 class="h4 m-0">{{ config('app.name', 'Laravel') }}</h1>
            @if (Route::has('login'))
                <div class="nav">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-sm ms-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm ms-2">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm ms-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>

    {{-- Main content --}}
    <main class="container flex-grow-1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">

                <div class="card shadow-lg mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Bienvenido a {{ config('app.name', 'Laravel') }}</h2>
                        <p class="text-muted">
                            Esta es la página de inicio de tu aplicación Laravel con CoreUI.
                        </p>
                    </div>
                </div>

                <div class="row g-3">
                    {{-- Links a documentación y recursos --}}
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Documentación</h5>
                                <p class="card-text">Aprende cómo usar Laravel.</p>
                                <a href="https://laravel.com/docs" target="_blank" class="btn btn-primary">Ver Docs</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-success">
                            <div class="card-body">
                                <h5 class="card-title">Laracasts</h5>
                                <p class="card-text">Tutoriales en video sobre Laravel.</p>
                                <a href="https://laracasts.com" target="_blank" class="btn btn-success">Ver Laracasts</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Otros enlaces --}}
                <div class="row g-3 mt-3">
                    <div class="col-md-4">
                        <a href="https://laravel-news.com" target="_blank" class="btn btn-outline-dark w-100">Laravel News</a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://github.com/laravel/laravel" target="_blank" class="btn btn-outline-dark w-100">GitHub</a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://laravel.com" target="_blank" class="btn btn-outline-dark w-100">Más info</a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="c-footer border-top text-center py-3">
        <small>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</small>
    </footer>

    {{-- CoreUI JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.0/dist/js/coreui.bundle.min.js"></script>
</body>
</html>