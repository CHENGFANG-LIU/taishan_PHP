<?php
// echo $_GET['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo= new PDO($dsn,"root","");
$sql="select * from `students` where `id`='{$_GET['id']}'";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php"  method="POST">
    <div><input type="hidden" value="<?=$row["id"];?>" name="<?=$row["id"];?>"></div>
    <div><label for="">學號<input type="text" value="<?=$row["uni_id"];?>" name="<?=$row["uni_id"];?>"></label></div>
    <div><label for="">班級<input type="text" value="<?=$row["seat_num"];?>" name="<?=$row["seat_num"];?>"></label></div>
    <div><label for="">姓名<input type="text" value="<?=$row["name"];?>" name="<?=$row["name"];?>"></label></div>
    <div><label for="">生日<input type="text" value="<?=$row["birthday"];?>" name="<?=$row["birthday"];?>"></label></div>
    <div><label for="">身分證字號<input type="text" value="<?=$row["national_id"];?>" name="<?=$row["national_id"];?>"></label></div>
    <div><label for="">住址<input type="text" value="<?=$row["address"];?>" name="<?=$row["address"];?>"></label></div>
    <div><label for="">家長<input type="text" value="<?=$row["parent"];?>" name="<?=$row["parent"];?>"></label></div>
    <div><label for="">電話<input type="text" value="<?=$row["telphone"];?>" name="<?=$row["telphone"];?>"></label></div>
    <div><label for="">主修<input type="text" value="<?=$row["major"];?>" name="<?=$row["major"];?>"></label></div>
    <div><label for="">畢業國中<input type="text" value="<?=$row["secondary"];?>" name="<?=$row["secondary"];?>"></label></div>
    
    </form>
</body>
<?php

?>
</html>