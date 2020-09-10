<h1>todo-laravel</h1>

<p>パスワード再設定は、以下のリンクから行ってください。</p>

<a href="{{ route('password.reset', ['token' => $token]) }}">
    パスワード再設定リンク
</a>