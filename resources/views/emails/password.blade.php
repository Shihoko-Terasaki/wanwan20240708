@component('mail::message')
# パスワードリセット

以下のボタンをクリックしてパスワードをリセットしてください。

@component('mail::button', ['url' => $resetUrl])
パスワードをリセット
@endcomponent

もしこのメールに心当たりがない場合は、何もする必要はありません。

Thanks,<br>
{{ config('app.name') }}
@endcomponent
