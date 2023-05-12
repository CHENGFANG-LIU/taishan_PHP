<?php
// 資料庫的連線
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
// 連線物件
$pdo=new PDO($dsn,'root','');

$sql="select * from students limit 1,1";
// 送進php fetch拿到,row是個陣列
$row=$pdo->query($sql)->fetch();
echo "<pre>";
print_r($row);
echo "</pre>";

// 限制取回的
// $row2=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$row2=$pdo->query($sql,PDO::FETCH_ASSOC)->fetch();
echo "<pre>";
print_r($row2);
echo "</pre>";
$row3=$pdo->query($sql)->fetch(PDO::FETCH_NUM);
echo "<pre>";
print_r($row3);
echo "</pre>";
