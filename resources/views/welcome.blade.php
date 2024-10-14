<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kos-kosan UNIB</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome_style.css') }}">
    </head>
    <body class="antialiased">
        <div class="main-container">
            <div class="background-overlay"></div>
            <div class="website-title">Kos-kosan UNIB</div>

            @if (Route::has('login'))
                <div class="auth-buttons">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-text">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-text">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-text">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content-wrapper">
                <h1 class="welcome-text">Selamat Datang di Website Pencarian Kos-Kosan Sekitaran UNIB</h1>
                <a href="#" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </body>
</html>
