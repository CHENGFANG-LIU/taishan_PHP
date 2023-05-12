<?php
// 資料庫的連線
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
// 連線物件
$pdo=new PDO($dsn,'root','');

$sql="delete from students where `id`='{$_GET['id']}'";

// 執行execute
$pdo->exec($sql);

header('location:crud.php');


?>