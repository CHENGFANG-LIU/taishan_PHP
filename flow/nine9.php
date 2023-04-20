<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-wrap: wrap;
        }
        div{
            margin: 1%;
            flex-basis: 23%;
        }
        table{
            flex-basis: 98%;
            margin:1%;
            border:1px solid black;
        }
        td{
            border:1px solid black;
            
        }
    </style>
</head>
<body>
<?php 
for($a=1;$a<=8;$a++){
    echo "<div>";
    for($i=1;$i<=9;$i++){
        // 單引號會變全字串
        echo "$a x $i =";
        echo $a*$i;
        echo "<br>";
    }
    echo "</div>";
}

for($a=1;$a<=8;$a++){
    
    for($i=1;$i<=9;$i++){
        // 單引號會變全字串
        echo "$a x $i =";
        echo $a*$i;
        echo ";";
        
    }
    echo "<br>";
    
}
echo "<table>";
for($a=1;$a<=8;$a++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        // 單引號會變全字串
        echo "<td>";
        echo "$a x $i =";
        echo $a*$i;
        echo ";";
        echo "</td>";
    }
    echo "</tr>";
    
}
echo "</table>";
echo "<br>";
echo "<table>";
for($a=1;$a<=8;$a++){
    
    for($i=1;$i<=9;$i++){
        // 單引號會變全字串
        echo "<tr>";
        echo "<td>";
        echo "$a x $i =";
        echo $a*$i;
        echo ";";
        echo "</td>";
        echo "</tr>";
    }
    
    
}
echo "</table>";

echo "<table>";
for($a=0;$a<=8;$a++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        // 單引號會變全字串
        echo "<td>";
        echo "$a x $i =";
        echo $a*$i;
        echo ";";
        echo "</td>";
    }
    echo "</tr>";
    
}
echo "</table>";

echo "<br>";
echo "<table>";
for($a=0;$a<=9;$a++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($i==0 && $a==0){
            echo '&nbsp;';
        }else if($a=0){
            echo $i;
        }else if($i=0){
            echo $a;
        }else{echo $a*$i; }
        echo "</td>";
    }
    echo "</tr>";
    
}
echo "</table>";



?>

</body>
</html>
