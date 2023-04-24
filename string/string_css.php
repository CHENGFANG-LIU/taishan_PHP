<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color:blueviolet;
        }
        </style>
</head>
<body>
<!-- "學會PHP網頁<span>程式設計</span>，薪水會加倍，工作會好找"; -->
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $tar="程式設計";
    
    echo str_replace($tar,"<span>$tar</span>",$str);

    
    ?>
</body>
</html>