<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo= new PDO($dsn,"root","");
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$sql="select count(*) from `users` 
where `acc`='$acc' && `password`='$pw'";
// fetchColumn回傳一個欄位
$chk=$pdo->query($sql)->fetchColumn();
echo $chk;
if($chk){
    echo "susse";
}else{
    echo "err";
}