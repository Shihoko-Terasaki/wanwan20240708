@extends('layouts.app')

@section('content')
<div class="container">
    <h1>お問い合わせ履歴</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>メッセージ</th>
                <th>送信日時</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->id }}</td>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->message }}</td>
                    <td>{{ $inquiry->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
