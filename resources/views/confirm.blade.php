@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
  @endsection
</head>
<body>
@section('content')
<?php print_r($contact) ?>
  <div class="confirm">
    <h2 class="confirm__title">Confirm</h2>
    <form class="form" action="/contacts" method="post">
        @csrf
     <table class="confirm__table">
        <table class="confirm-table_inner">
    <tr class="confirm-table_row">
      <th class="confirm-table_header">お名前</th>
      <td class="confirm-table_text">
        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
       <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
    </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">性別</th>
      <td class="confirm-table_text">
        @if($inputs['gender'] == 1)
          男性
        @elseif($inputs['gender'] == 2)
          女性
        @else
          その他
        @endif
      </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">メールアドレス</th>
      <td class="confirm-table_text">
        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
    </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">電話番号</th>
      <td class="confirm-table_text">
        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
    </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">住所</th>
      <td class="confirm-table_text">
        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
    </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">建物名</th>
      <td class="confirm-table_text">
        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
    </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">お問い合わせの種類</th>
      <td class="confirm-table_text">
        <input type="text" name="type" value="{{ $contact['type'] }}" readonly />
    </td>
    </tr>
    <tr class="confirm-table_row">
      <th class="confirm-table_header">お問い合わせ内容</th>
      <td class="confirm-table_text">
        <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
    </td>
    </tr>
  </table>
    <div class="confirm__buttons">
      <button type="submit" class="confirm__submit">送信</button>
      <a href="/contacts" class="confirm__back">修正</a>
    </div>
  </form>

</div>
@endsection

</body>
</html>