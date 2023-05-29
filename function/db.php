<?php
function all($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `$table`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
print_r(all('topics'));


echo "<hr>";
function find_one($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `$table` where `id`='$id'";
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}
print_r(all('topics'));


echo "<hr>";


function update_one($table,$cols,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
    $pdo=new PDO($dsn,'root','');
    
    $str="";
    foreach($cols as $column => $val){
                $str=$str."`$column`='$val',";
            }
    $new_str=trim($str,',');
    $sql="update `$table` set $new_str where `id`='$id'";
$pdo->exec($sql);


}


// $cols=['subject'=>'很好','open'=>'好'];
// $str="";
//     foreach($cols as $column => $val){
//         $str=$str."`$column`='$val',";
//     }
//     echo $str;

update_one('topics',['subject'=>'很好','open_time'=>'好'],2);


