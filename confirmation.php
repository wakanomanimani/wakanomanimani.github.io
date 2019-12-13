<form action="mail.php" method="post">
    <h2>確認画面</h2>
    <table border="1">
      <tr>
        <td>お名前</td>
        <td><?php echo $_POST["name"]; ?></td>
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
    <a href="index.html">戻る</a>
  </form>
  <!-- POSTの中身をSESSIONへ受け渡す -->
  <?php
  session_start() ;
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["mail"] = $_POST["mail"];
  $_SESSION["comment"] = $_POST["comment"];
  ?>
