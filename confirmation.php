<form action="https://wakanomanimani.github.io/mail.php" method="post">
    <h2>確認画面</h2>
    <table border="1">
      <tr>
        <td>お名前</td>
        <td><?php echo $_POST["yourname"]; ?></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><?php echo $_POST["mail"]; ?></td>
      </tr>
      <tr>
        <td>コメント</td>
        <td><?php echo $_POST["comment"]; ?></td>
      </tr>
    </table>
    <input type="submit" value="送信"/>
    <a href="https://wakanommanimani.github.io/index.html">戻る</a>
  </form>
  <!-- POSTの中身をSESSIONへ受け渡す -->
  <?php
  session_start() ;
  $_SESSION["yourname"] = $_POST["yourname"];
  $_SESSION["mail"] = $_POST["mail"];
  $_SESSION["comment"] = $_POST["comment"];
  ?>
