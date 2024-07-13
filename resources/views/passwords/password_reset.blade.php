@component('mail::message')
# パスワードリセット

以下のボタンをクリックしてパスワードをリセットしてください。

@component('mail::button', ['url' => $url])
パスワードをリセット
@endcomponent

このリンクは60分後に期限が切れます。

もしパスワードリセットを要求していない場合は、このメールを無視してください。

{{ config('app.name') }}
@endcomponent
