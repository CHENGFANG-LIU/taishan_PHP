<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        echo "<div style='color:red'>" .$_GET['error'] ."</div>";
    }

    ?>
    <!-- action="?"送到自己的頁面 -->
    <form action="login01_2.php" method="post" id="login">
        <div>
            <label for="count">帳號</label>
            <input type="text" name="count" id="count">
        </div>
        <div>
            <label for="password">密碼</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>