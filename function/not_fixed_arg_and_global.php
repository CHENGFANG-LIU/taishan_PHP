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
     $name='amy';

    echo sum(25,35,68,42,66);
    function sum(...$arg1){
        global $name;
        $sum=0;
        foreach($arg1 as $arg){
            $sum=$sum+$arg;
        }
        
        return $sum.$name;

    }

    echo sum(1,2,3);
    ?>
    
</body>
</html>