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
        <style>
            body, html {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }
            .btn-text, .btn-get-started {
                background-color: transparent;
                color: #ffffff;
                padding: 0.5rem 1rem;
                transition: all 0.3s ease;
                text-decoration: none;
                font-weight: 600;
                display: inline-block;
                cursor: pointer;
                font-size: 1rem;
                position: relative;
                overflow: hidden;
            }
            .btn-text::before, .btn-get-started::before {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: #ffffff;
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.3s ease;
            }
            .btn-text:hover::before, .btn-get-started:hover::before {
                transform: scaleX(1);
                transform-origin: left;
            }
            .btn-text:hover, .btn-get-started:hover {
                color: #f0f0f0;
                transform: translateY(-2px);
                text-shadow: 0 0 8px rgba(255, 255, 255, 0.8);
            }
            .btn-get-started {
                background-color: #ffffff;
                color: #1a202c;
                padding: 0.75rem 1.5rem;
                border-radius: 9999px;
                transition: all 0.3s ease;
                text-decoration: none;
                font-weight: 600;
                display: inline-block;
                cursor: pointer;
                font-size: 1.1rem;
                margin-top: 2rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .btn-get-started:hover {
                background-color: #f0f0f0;
                color: #1a202c;
                transform: translateY(-2px);
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
            }
            .btn-get-started::before {
                content: none;
            }
            .welcome-text {
                font-size: 3rem;
                font-weight: bold;
                color: #ffffff;
                text-align: center;
                margin-bottom: 2rem;
                max-width: 80%;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            }
            .auth-buttons {
                position: absolute;
                top: 1rem;
                right: 1rem;
                display: flex;
                gap: 1rem;
                z-index: 10;
            }
            .content-wrapper {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                padding: 1rem;
                box-sizing: border-box;
            }
            .main-container {
                position: relative;
                width: 100vw;
                height: 100vh;
                overflow: hidden;
                background-image: url('{{ asset('images/1.jpg') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .website-title {
                position: absolute;
                top: 1rem;
                left: 1rem;
                font-size: 1.2rem;
                font-weight: bold;
                color: #ffffff;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .website-title::after {
                content: '';
                position: absolute;
                bottom: -3px;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: #ffffff;
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.3s ease;
            }
            .website-title:hover {
                color: #f0f0f0;
                text-shadow: 0 0 8px rgba(255, 255, 255, 0.8);
            }
            .website-title:hover::after {
                transform: scaleX(1);
                transform-origin: left;
            }
            /* Tambahkan overlay untuk meningkatkan keterbacaan teks */
            .background-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.6); /* Meningkatkan opacity */
            }
        </style>
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
