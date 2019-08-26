<?php

// ログイン処理
// GET時は画面出力のみ
// POST時にログイン処理をする
// id、パスワードが違う場合はログインさせず、エラーメッセージを表示
// ログインを記憶させる場合はクッキーをセット
// ログインできる場合は / にリダイレクト
// すでにログインしている場合はこのページにアクセスさせず、メンバーページにリダイレクト

$message = "";
$user = null;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    </style>
  </head>
  <body>
    <? if ($message): ?>
    <p><?php echo $message; ?></p>
    <?php endif; ?>

    <? if ($user): ?>
    <p>ようこそ<?php echo $user['id'] ?>さん</p>
    <?php endif; ?>

    <form method="post" action="/">
      <span>ID</span>
      <input type="text" name="id">
      <br>
      <span>パスワード</span>
      <input type="password" name="pass">
      <button type="submit">ログイン</button>
    </form>
  </body>
</html>
