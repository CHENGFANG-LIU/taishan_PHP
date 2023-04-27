<?php

$acc='admin';
$pw='1234';

$count=$_POST['count'];
$password=$_POST['password'];

if($count==$acc && $password==$pw){
    echo '登入成功';
}else{
    
    header("location:login01_1.php?error:錯誤，登入失敗");
    // 問號後面用網頁傳值，<a>也可以做到
}