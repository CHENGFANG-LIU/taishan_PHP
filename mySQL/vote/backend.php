<?php
include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    
    <title>後臺管理</title>
</head>
<body>
    <header>
        <a href="index.php">首頁</a>
        <a href="logout.php">登出</a>
    </header>
    <main>
    <a href="./back/addVote.php">新增投票</a>
    <a href="./editVote.php">編輯投票</a>
    <a href="./deleteVote.php">刪除投票</a>
    <a href="./queryVote.php">結果查詢</a>
    <a href=""></a>
    </main>
    <div class="topic-row">
        
            <div>主題</div>
            <div>狀態</div>
            <div>期間</div>
            <div>投票數</div>
            <div>操作</div>
        
    </div>
    <?php
    $sql="select * from `topics`";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){

    
    ?>
    <div class="topic-row">
        
            <div><?=$row["subject"]?></div>
            <div></div>
            <div><?=$row["open_time"]?>~<?=$row["close_time"]?></div>
            <div></div>
            <div>
                <button onclick="location.href='./back/editVote.php'">編輯</button>
            </div>
            <div>
                <button onclick="location.href='./back/deleteVote.php'">刪除</button>
            </div>
        
    </div>
    <?php
    }
    ?>

    <footer></footer>
    
    
</body>
</html>