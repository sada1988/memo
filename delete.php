<?php require('dbconnect.php');?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">
<body>
<header>
<h1 class="font-weight-normal">よく分かるPHPの教科書</h1>
</header>
<main>
<h2>Practice</h2>
  <?php
  if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $statement = $db->prepare('DELETE FROM memos WHERE id=?');
    $statement->execute(array($id));
  }
  ?>
  <pre>
    <p>メモを削除しました</p>
    <p><a href = "index.php">戻る</a></p>
  </pre>
</main>
</body>
</head>
</html>