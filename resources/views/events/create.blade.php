@extends('layouts.app')

@section('content')
<div class="container">
    <h1>イベント作成</h1>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">イベント名</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">説明</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="event_date" class="form-label">イベント日</label>
            <input type="date" class="form-control" id="event_date" name="event_date">
        </div>
        <button type="submit" class="btn btn-primary">作成</button>
    </form>
</div>
@endsection
