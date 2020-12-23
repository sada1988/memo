<?php
try{
  $db=new PDO('mysql:dbname=mydb;host=localhost;charset=utf8','root','root');
} catch (PDOException $e) {
  echo '接続エラー：' . $e->getMessage();
}

$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
$statement->execute(array($_POST['memo']));
echo 'メッセージが登録されました';
?>