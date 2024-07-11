@extends('layouts.app')

@section('content')
<div class="container">
    <h1>イベント一覧</h1>
    <table>
        <thead>
            <tr>
                <th>イベント名</th>
                <th>日付</th>
                <th>場所</th>
            </tr>
        </thead>
        <tbody>
            <!-- イベントデータをここに表示します -->
        </tbody>
    </table>
</div>
@endsection

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>イベント一覧 - Wanwan 探検隊</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Wanwan 探検隊</h1>
        <nav>
            <a href="/">ホーム</a>
            <a href="/events">イベント</a>
            <a href="/contact">お問い合わせ</a>
        </nav>
    </header>
    <main>
        <h2>イベント一覧</h2>
        <p>以下に小型犬のオフ会・イベントの情報を表示します。</p>
    </main>
    <footer>
        <p>&copy; 2024 Wanwan 探検隊</p>
    </footer>
</body>
</html>
