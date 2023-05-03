<?php
include_once("set_comm.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
    $command_thing = "notvip";
    include('set_header.php');
    if(isset($_SESSION['login'])){
        echo 'welcome'.$_SESSION['login'];

    }else{

    ?>
    <form action="set_check.php" method="post">
        <?php
        if(isset($_SESSION["error"])){
                echo "密碼錯誤";
        }
        echo '
        
        <div>
            <label for="count">帳號</label>
            <input name="acc" type="text">
        </div>
        <div>
            <label for="password">密碼</label>
            <input name="pw" type="password">
        </div>
        <div>
        <input type="submit" value="登入">
        </div>
    </form>
    <?php
    ';}
    ?>
    
</body>
</html>