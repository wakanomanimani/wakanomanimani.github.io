<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  session_start();
  $to = wakanomanimani.google.com;
  $name = htmlspecialchars($_SESSION['name']);
  $mail = htmlspecialchars($_SESSION['mail']);
  $comment = htmlspecialchars($_SESSION['comment']);
  $header = "From:$mail";
  $body = "お名前"."\n"."$name"."\n\n"
  ."メールアドレス"."\n"."$mail"."\n\n"
  ."コメント"."\n"."$content"."\n\n";
  ?>
  <?php if((mb_send_mail($to,$body,$header))) : ?>
    <p >メールの送信が完了しました</p>
  <?php else : ?>
    <p>メールの送信が失敗しました</p>
  <?php endif ; ?>
  <a href="index.html">戻る</a>
