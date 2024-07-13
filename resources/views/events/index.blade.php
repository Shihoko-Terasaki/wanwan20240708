@extends('layouts.app')

@section('content')
<div class="container">
    <h1>イベント一覧</h1>
    
    <form method="GET" action="{{ route('events.index') }}">
        <div class="form-group">
            <label for="area">エリア</label>
            <input type="text" class="form-control" id="area" name="area" value="{{ request('area') }}">
        </div>

        <div class="form-group">
            <label for="breed">犬種</label>
            <input type="text" class="form-control" id="breed" name="breed" value="{{ request('breed') }}">
        </div>

        <div class="form-group">
            <label for="date">日付</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ request('date') }}">
        </div>

        <button type="submit" class="btn btn-primary">フィルタリング</button>
    </form>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>イベント名</th>
                <th>日付</th>
                <th>場所</th>
                <th>エリア</th>
                <th>犬種</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td><a href="{{ route('events.show', $event) }}">{{ $event->name }}</a></td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->area }}</td>
                    <td>{{ $event->breed }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $events->links() }}
</div>
@endsection
