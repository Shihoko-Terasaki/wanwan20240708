@extends('layouts.app')

@section('content')
<div class="container">
    <h1>お問い合わせ一覧</h1>

    <ul>
        @foreach ($inquiries as $inquiry)
            <li>{{ $inquiry->message }}</li>
        @endforeach
    </ul>
</div>
@endsection
