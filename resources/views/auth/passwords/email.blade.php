@extends('layouts.app')

@section('content')
<div class="container">
    <h1>パスワードリセット</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">パスワードリセットリンクを送信</button>
    </form>
</div>
@endsection
