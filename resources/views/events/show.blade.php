@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p>イベント日: {{ $event->event_date }}</p>
</div>
@endsection
