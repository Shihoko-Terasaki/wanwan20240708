@extends('layouts.app')

@section('content')
<div class="container">
    <h1>イベント一覧</h1>

    <form action="{{ route('events.index') }}" method="GET">
        <div class="mb-3">
            <label for="area" class="form-label">エリア</label>
            <input type="text" class="form-control" id="area" name="area">
        </div>
        <div class="mb-3">
            <label for="breed" class="form-label">犬種</label>
            <input type="text" class="form-control" id="breed" name="breed">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">日付</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">検索</button>
    </form>

    <ul>
        @foreach ($events as $event)
            <li>
                <a href="{{ route('events.show', $event) }}">{{ $event->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
