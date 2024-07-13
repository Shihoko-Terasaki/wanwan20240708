@extends('layouts.app')

@section('content')
<div class="container">
    <h1>お問い合わせ</h1>
    <form method="POST" action="{{ route('inquiries.store') }}">
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
</div>
@endsection
