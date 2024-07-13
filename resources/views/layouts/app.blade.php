<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Wanwan 探検隊</h1>
        <nav>
            <a href="/">ホーム</a>
            <a href="/events">イベント</a>
            <a href="/contact">お問い合わせ</a>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Wanwan 探検隊</p>
    </footer>
</body>
</html>
