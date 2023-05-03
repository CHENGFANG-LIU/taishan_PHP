<?php
session_start();
$acc='admin02';
$pw='123456';

if(($_POST['acc'] == $acc) && ($_POST['pw'] == $pw)){
    // echo "登入成功";
    $_SESSION['login']=$acc;

    // 登入成功後之前的'error'還在所以要刪掉
    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
        
    }
    header("location:set_menber_center.php");
}else{
    // echo "err";
    $_SESSION['error']='err';
    // 之前登入成功的'login'還在所以要刪除才不容易被駭
    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);
        
    }
    header("location:set_login.php");
}
