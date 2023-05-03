<h1>session</h1>
<?php
// SESSION是用陣列儲存
session_start();
$_SESSION['name']='1133';

echo $_SESSION['name'];

?>
<a href="logout.php">登出</a>