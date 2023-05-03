<!-- set_menber_center.php -->
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
    // 用同一個變數在不同頁面有不同值的方式，讓switch可以分流，login的$command_thing = "notvip";
    $command_thing='vip';
    include("set_header.php");
    ?>  
    
</body>
</html>