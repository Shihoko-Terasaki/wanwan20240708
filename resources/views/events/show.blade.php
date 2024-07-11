@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p><strong>日付:</strong> {{ $event->event_date }}</p>
    <p><strong>場所:</strong> {{ $event->location }}</p>

    <h2>コメント</h2>
    <form action="{{ route('comments.store', $event) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="comment">コメント</label>
            <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">コメントを追加</button>
    </form>

    <h3>コメント一覧</h3>
    @foreach($event->comments as $comment)
        <div class="card mt-3">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
                <p><small>投稿者: {{ $comment->user->name }} | 投稿日: {{ $comment->created_at }}</small></p>
            </div>
        </div>
    @endforeach
</div>
@endsection
