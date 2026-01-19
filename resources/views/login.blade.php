<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
     <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
</head>
<body>
 <div class="header">
      <div class="header-title">FashionablyLate</div>
    </div>

<div class="login-page">

    <header class="header">
        <div class="header-inner">
            <h1 class="logo">FashionablyLate</h1>
            <a href="{{ route('register') }}" class="register-btn">register</a>
        </div>
    </header>

    <main class="login-main">
        <h2 class="title">Login</h2>

        <div class="login-box">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">

                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password" placeholder="例: coachtech">

                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="login-btn">ログイン</button>
            </form>
        </div>
    </main>

</div>
</body>
</html>