<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
        <a href="index.php">首頁</a>
        <a href="./front?go=result.php">結果</a>
        <a href="./front?go=login.php">登入</a>
        <a href="./front?go=reg.php">註冊</a>
        <a href="./front?go=vote.php">註冊</a>
    </header>
    <main>
    
    
        <?php
        include_once "db.php";
        if(isset($_GET["go"])){
            include "./front/$file";
        }else{
            include "./front/result.php";
        }







        


        

        
        ?>
    </main>
    <footer></footer>
</body>
</html>