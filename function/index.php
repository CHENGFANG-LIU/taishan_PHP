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
    function add_two($a,$b){


        return $a+$b;
    }


    echo add_two(10,21);
    function circle($r,$p=3.14159){
        return $r*$r*$p;
    }
    echo "<hr>";
    echo circle(5);
    echo "<hr>";
    echo circle(5,3.1);
    ?>




</body>
</html>