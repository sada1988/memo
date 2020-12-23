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
<pre>
<?php
try{
  $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8','root','root');

} catch (PDOException $e) {
  echo 'DB接続エラー： ' . $e->getMessage();
}

$records = $db->query('SELECT * FROM my_items');
while ($record=$records->fetch()) {
  print ($record['item_name'] . "\n");
}

?>
</pre>
</main>
</body>
</head>
</html>