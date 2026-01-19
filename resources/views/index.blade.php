<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <main>
    <div class="header">
      <div class="header-title">FashionablyLate</div>
    </div>

    <h2 class="contact-title">Contact</h2>

    <form class="contact-form" action="/contacts/confirm" method="post">
    @csrf

    <form class="contact-form">
    <div class="form-row">
      <div class="form-label">お名前<span>※</span></div>
      <div class="form-input-area">
      <input class="input first_name-input" placeholder="例:山田" value="{{ old('first_name') }}" />
      <input class="input last_name-input" placeholder="例:太郎" value="{{ old('last_name') }}" />
    </div>
    </div>
    
    <div class="form_error">
      @error('first_name')
      {{ $message }}
      @enderror
      @error('last_name')
      {{ $message }}
      @enderror
    </div>

    <div class="form-row">
      <div class="form-label">性別<span>※</span></div>
      <div class="form-input-area gender-group">
      <label><input type="radio" name="gender" value="男性">男性</label>
      <label><input type="radio" name="gender" value="女性">女性</label>
      <label><input type="radio" name="gender" value="その他">その他</label>
      </div>
    </div>

    <div class="form_error">
      @error('gender')
      {{ $message }}
      @enderror
    </div>

    <div class="form-row">
      <div class="form-label">メールアドレス<span>※</span></div>
      <div class="form-input-area">
      <input class="input email-input" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
    </div>
    </div>

    <div class="form_error">
      @error('email')
      {{ $message }}
      @enderror
    </div>

    <div class="form-row">
      <div class="form-label">電話番号<span>※</span></div>
      <div class="form-input-area">
      <input class="input tel1-input" type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" /> -
      <input class="input tel2-input" type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}" /> -
      <input class="input tel3-input" type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
    </div>
    </div>

    <div class="form_error">
      @error('tel1')
      {{ $message }}
      @enderror
      @error('tel2')
      {{ $message }}
      @enderror
      @error('tel3')
      {{ $message }}
      @enderror
    </div>

    <div class="form-row">
      <div class="form-label">住所<span>※</span></div>
      <div class="form-input-area">
      <input class="input address-input" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
    </div>
    </div>

    <div class="form_error">
      @error('address')
      {{ $message }}
      @enderror
    </div>

    <div class="form-row">
      <div class="form-label">建物名</div>
      <div class="form-input-area"> 
      <input class="input building-input" type="text" name="building" placeholder="千駄ヶ谷マンション101" value="{{ old('building') }}" />
    </div>
    </div>

    <div class="form-row">
      <div class="form-label">お問い合わせの種類<span>※</span></div>
       <div class="form-input-area">
      <select class="select-box" name="type">
      <option value="">選択してください</option>
      <option value="商品について">商品について</option>
      <option value="注文について">注文について</option>
      <option value="その他">その他</option>
      </select>
    </div>
    </div>

    <div class="form_error">
      @error('type')
      {{ $message }}
      @enderror
    </div>

    <div class="form-row">
      <div class="form-label">お問い合わせ内容<span>※</span></div>
       <div class="form-input-area">
      <textarea class="textarea-box" name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
    </div>
    </div>

    <div class="form_error">
      @error('content')
      {{ $message }}
      @enderror
    </div>

    <div class="submit-area">
      <button class="submit-btn" type="submit">確認画面</button>
    </div>

    </form>
  </main>
</body>

</html>
