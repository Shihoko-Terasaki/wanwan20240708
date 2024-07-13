<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせありがとうございます</title>
</head>
<body>
    <p>{{ $inquiry->name }} 様</p>
    <p>お問い合わせいただきありがとうございます。以下の内容でお問い合わせを受け付けました。</p>
    <p><strong>お名前:</strong> {{ $inquiry->name }}</p>
    <p><strong>メールアドレス:</strong> {{ $inquiry->email }}</p>
    <p><strong>メッセージ:</strong> {{ $inquiry->message }}</p>
    <p>担当者より追ってご連絡いたしますので、しばらくお待ちください。</p>
</body>
</html>
