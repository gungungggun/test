<?php
// ログインに関わらずアクセスできる
// ログインしていない場合はログインへの誘導リンクを表示
// ログインしている場合はようこそだれだれを表示
// ログインしている場合はメンバーページへの誘導リンクを表示
// ログインしている場合はログアウトへの誘導リンクを表示
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>誰でもアクセスOK</p>
    <p>ようこそだれだれ</p>
    <a href="/login">ログイン</a>
    <a href="/member">メンバー専用ページへ</a>
    <a href="/logout">ログアウト</a>
  </body>
</html>
