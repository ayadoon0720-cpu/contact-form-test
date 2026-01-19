<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
<main>
    <div class="header">
      <div class="header-title">FashionablyLate</div>
    </div>
<div class="register-wrapper">

  <h2 class="register-title">Register</h2>

  <div class="register-card">
    <form action="/register" method="post">
      @csrf

      <div class="form-group">
        <label>お名前</label>
        <input type="text" name="name" placeholder="例：山田 太郎">
      </div>

      <div class="form-group">
        <label>メールアドレス</label>
        <input type="email" name="email" placeholder="例：test@example.com">
      </div>

      <div class="form-group">
        <label>パスワード</label>
        <input type="password" name="password" placeholder="例：coachtech1106">
      </div>

      <button type="submit" class="register-btn">登録</button>
    </form>
  </div>

</div>
</main>
</body>
</html>