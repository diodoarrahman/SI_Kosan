<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body, html {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
                font-family: 'Poppins', sans-serif;
            }
            .btn-text {
                color: #ffffff;
                padding: 0.5rem 1rem;
                transition: all 0.3s ease;
                text-decoration: none;
                font-weight: 600;
                display: inline-block;
                border: none;
                cursor: pointer;
                font-size: 1rem;
                position: relative;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .btn-text::after {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: #ffffff;
                transform: scaleX(0);
                transform-origin: bottom right;
                transition: transform 0.3s ease-out;
            }
            .btn-text:hover {
                color: #f8f8f8;
            }
            .btn-text:hover::after {
                transform: scaleX(1);
                transform-origin: bottom left;
            }
            .welcome-text {
                font-size: 3.5rem;
                font-weight: 700;
                color: #ffffff;
                text-align: center;
                margin-bottom: 2rem;
                max-width: 80%;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
                line-height: 1.2;
                letter-spacing: -1px;
            }
            .auth-buttons {
                position: absolute;
                top: 1rem;
                right: 1rem;
                display: flex;
                gap: 1rem;
            }
            .content-wrapper {
                position: relative;
                z-index: 1;
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
            .background-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.4);
            }
            .website-title {
                position: absolute;
                top: 1rem;
                left: 1rem;
                font-size: 1.4rem;
                font-weight: 700;
                color: #ffffff;
                text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
                text-transform: uppercase;
                letter-spacing: 2px;
            }
            .btn-get-started {
                background-color: #ffffff;
                color: #1a202c;
                padding: 1rem 2rem;
                border-radius: 50px;
                transition: all 0.3s ease;
                text-decoration: none;
                font-weight: 600;
                display: inline-block;
                border: none;
                cursor: pointer;
                font-size: 1.1rem;
                margin-top: 2rem;
                text-transform: uppercase;
                letter-spacing: 1px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .btn-get-started:hover {
                background-color: #f8f8f8;
                transform: translateY(-2px);
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="main-container">
            <div class="background-overlay"></div>
            <div class="website-title">Website Kos-kosan</div>

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
