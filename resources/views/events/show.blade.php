@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p><strong>日付:</strong> {{ $event->event_date }}</p>
    <p><strong>場所:</strong> {{ $event->location }}</p>

    <hr>

    <h2>コメント</h2>
    <form method="POST" action="{{ route('comments.store', $event) }}">
        @csrf
        <div class="form-group">
            <label for="comment">コメント</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">コメントを追加</button>
    </form>

    <ul class="list-group mt-3">
        @foreach ($event->comments as $comment)
            <li class="list-group-item">
                <p>{{ $comment->comment }}</p>
                <small>投稿者: {{ $comment->user->name }} | 投稿日: {{ $comment->created_at }}</small>
            </li>
        @endforeach
    </ul>
</div>
@endsection
