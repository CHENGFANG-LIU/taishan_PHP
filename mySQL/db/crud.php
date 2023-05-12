<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,"root",'');
?>
<style>
    table{

    }
    .btn{
        background-color: lavender;
        width: 10%;
        height: 3vh;
        display: inline-block;
        border: 2px solid purple;
        text-align: center;
        border-radius: 15px;
        box-shadow: 2px 2px 10px black;
        margin: 2px;



    }
    a.btn{
        font-size: 20px;
        text-decoration: none;
        color: purple;
    }
    a.btn:hover{
        transform: scale(1.1);
        top: -5px;
        transition: all 1s;
        
    }
</style>

<h1>學生列表</h1>
<a href="create.php" class='btn'>新增學生資料</a>;
<table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>班級</td>
        <td>姓名</td>
        <td>生日</td>
        <td>身分證字號</td>
        <td>住址</td>
        <td>家長</td>
        <td>電話</td>
        <td>主修</td>
        <td>畢業國中</td>
        <td>編輯</td>
        <td>刪除</td>
    </tr>
    <?php
    $sql=('select * from `students`');
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
    ?>
    
        <tr>
        <td><?=$row["id"];?></td>
        <td><?=$row["uni_id"];?></td>
        <td><?=$row["seat_num"];?></td>
        <td><?=$row["name"];?></td>
        <td><?=$row["birthday"];?></td>
        <td><?=$row["national_id"];?></td>
        <td><?=$row["address"];?></td>
        <td><?=$row["parent"];?></td>
        <td><?=$row["telphone"];?></td>
        <td><?=$row["major"];?></td>
        <td><?=$row["secondary"];?></td>
        <td>編輯</td>
        <td><a href="del.php?id=<?=$row["id"];?>" onclick="confirm('確定要刪除嗎')">刪除</a></td>
    </tr>
    <?php
    };
    ?>
    
</table>
