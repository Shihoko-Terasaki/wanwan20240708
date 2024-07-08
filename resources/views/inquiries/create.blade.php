@extends('layouts.app')

@section('content')
<div class="container">
    <h1>お問い合わせ作成</h1>

    <form action="{{ route('inquiries.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="message" class="form-label">メッセージ</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">送信</button>
    </form>
</div>
@endsection
