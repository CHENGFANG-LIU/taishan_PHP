<?php
// join(string $separator, array $array)

function update($table,$cols,$def){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');
    
    $str=[];
    foreach($cols as $column => $val){
                $str[]=$str."`$column`=>'$val',";
            }
    $new_str=join(',', $str);
    

    


// where
    


$sql="update `$table` set $new_str where $def";
$pdo->exec($sql);


}