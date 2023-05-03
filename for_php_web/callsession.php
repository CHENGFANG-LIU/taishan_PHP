<?php
session_start();
echo $_SESSION['name'];
?>
<a href="logout.php">登出</a>