<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanwan 探検隊</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Wanwan 探検隊</h1>
        <nav>
            <a href="/">ホーム</a>
            <a href="/events">イベント</a>
            <a href="/contact">お問い合わせ</a>
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">ログイン</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">登録</a>
                @endif
            @endauth
        </nav>
    </header>
    <main>
        <h2>ようこそ！</h2>
        <p>小型犬のオフ会・イベント情報サイトへようこそ。</p>
    </main>
    <footer>
        <p>&copy; 2024 Wanwan 探検隊</p>
    </footer>
</body>
</html>
