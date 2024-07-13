@extends('layouts.app')

@section('content')
<div class="container">
    <h1>支払い履歴</h1>
    @if ($payments->isEmpty())
        <p>支払い履歴がありません。</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>イベント名</th>
                    <th>金額</th>
                    <th>ステータス</th>
                    <th>日付</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->event->name }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->status }}</td>
                        <td>{{ $payment->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
