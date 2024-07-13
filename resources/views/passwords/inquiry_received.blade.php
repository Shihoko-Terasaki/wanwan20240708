<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>お問い合わせありがとうございます</title>
</head>
<body>
    <p>{{ $inquiry->name }}様</p>
    <p>お問い合わせありがとうございます。以下の内容でお問い合わせを受け付けました。</p>
    <p><strong>名前:</strong> {{ $inquiry->name }}</p>
    <p><strong>メールアドレス:</strong> {{ $inquiry->email }}</p>
    <p><strong>メッセージ:</strong> {{ $inquiry->message }}</p>
    <p>今後ともよろしくお願いいたします。</p>
</body>
</html>
