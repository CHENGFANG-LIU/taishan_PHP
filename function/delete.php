<?php
function delete($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');
    $sql="delete from `$table` where ``";
}