<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo=new PDO($dsn,'root','');



$sql="INSERT INTO `users`(`name`, `acc`, `password`, `mail`, `phone`) VALUES 
('{$_POST['name']}',
'{$_POST['acc']}',
'{$_POST['password']}',
'{$_POST['mail']}',
'{$_POST['phone']}')";


$pdo->exec($sql);

header("location:index.php");