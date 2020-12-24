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
  $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
  $memos->execute(array($_REQUEST['id']));
  $memo = $memos->fetch();
  ?>
  <article>
    <pre><?php print($memo['memo']);?></pre>
    <a href = "update.php?id=<?php print($memo['id']); ?>">編集する</a>
    |
    <a href="index.php">戻る</a>
    |
    <a href="delete.php?id=<?php print($memo['id']); ?>">削除する</a>
  </article>
</main>
</body>
</head>
</html>
