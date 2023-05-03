<?php
session_start();
echo "已登出使用者".$_SESSION["login"];

unset($_SESSION['login']);
echo "<a href='set_login.php'>回登入</a>";