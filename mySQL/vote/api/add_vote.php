<?php
include_once "../db.php";
var_dump($_POST['description[]']);
var_dump($_POST['description']);
$sql_chk_subject=$pdo->query("select count(*) from `topics` where `subject`='{$_POST['subject']}'")->fetchColumn();
echo $sql_chk_subject;
if($sql_chk_subject){
echo "主題重複了，請換一個";
}else{
    // $sql="INSERT INTO `topics`(`subject`, `open_time`, `close_time`, `type`) VALUES 
    // (?,?,?,?)"; 
    // $stmt=$pdo->prepare($sql);
    // $stmt->bindParam(1,$_POST['subject']);
    // $stmt->bindParam(2,$_POST['openTime']);
    // $stmt->bindParam(3,$_POST['closeTime']);
    // $stmt->bindParam(4,$_POST['type']);
    // $stmt->execute();

    $sql_add_subject="INSERT INTO `topics`(`subject`, `open_time`, `close_time`, `type`) 
    VALUES ('{$_POST['subject']}','{$_POST['openTime']}','{$_POST['closeTime']}','{$_POST['type']}')";
    $pdo->exec($sql_add_subject);

    $sql_subject_id="select `id` from `topics` where `subject`='{$_POST['subject']}'";
    $subject_id=$pdo->query($sql_subject_id)->fetch();
    
    $sql_add_option="INSERT INTO `options`( `description`, `subject_id`) 
    VALUES ('[value-2]','[value-3]')"

    
}
