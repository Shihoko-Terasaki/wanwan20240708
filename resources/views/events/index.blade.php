@extends('layouts.app')

@section('content')
<div class="container">
    <h1>イベント一覧</h1>
    <form action="{{ route('events.index') }}" method="GET" class="mb-4">
        <div class="form-row">
            <div class="col">
                <input type="text" name="area" class="form-control" placeholder="地域" value="{{ request('area') }}">
            </div>
            <div class="col">
                <input type="text" name="breed" class="form-control" placeholder="犬種" value="{{ request('breed') }}">
            </div>
            <div class="col">
                <input type="date" name="date" class="form-control" value="{{ request('date') }}">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">検索</button>
            </div>
        </div>
    </form>

    @if($events->count())
        <table class="table">
            <thead>
                <tr>
                    <th>イベント名</th>
                    <th>日付</th>
                    <th>場所</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->event_date }}</td>
                        <td>{{ $event->location }}</td>
                        <td><a href="{{ route('events.show', $event) }}" class="btn btn-info">詳細</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $events->links() }}
    @else
        <p>該当するイベントがありません。</p>
    @endif
</div>
@endsection
