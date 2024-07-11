<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ - Wanwan 探検隊</title>
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
        <h2>お問い合わせ</h2>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">名前</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">メッセージ</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Wanwan 探検隊</p>
    </footer>
</body>
</html>
