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
    $a = 10; $b = 50;
    $arr1=[$a,$b];
    $a = $arr1[1];
    $b = $arr1[0];
    echo "<h1>a=".$a."</h1>";
    ?>
    <br/>
    <?php
    $c = 13;
    echo ($c -= 3);
    ?>

</body>
</html>