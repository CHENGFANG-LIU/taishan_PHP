
<nav>
<?php

if(isset($_SESSION["login"])){
    echo "welcome".$_SESSION['login'];
    echo "<a href='set_logout.php'>登出</a>";
}
?>

<div>
    首頁
</div>
<?php
switch($command_thing){
    case $command_thing=='vip';
        include('set_vip.php');
    break;
    case $command_thing == "notvip";
        include("set_notvip.php");
}
?>
</nav>
