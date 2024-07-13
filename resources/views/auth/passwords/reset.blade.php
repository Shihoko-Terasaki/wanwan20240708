@extends('layouts.app')

@section('content')
<div class="container">
    <h1>パスワードリセット</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">新しいパスワード</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password-confirm">新しいパスワード（確認用）</label>
            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">パスワードをリセット</button>
    </form>
</div>
@endsection
