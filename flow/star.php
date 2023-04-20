<style>
*{
    font-family: 'Courier New', Courier, monospace;
}
</style>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<(5-$i);$j++){
        echo "*";

    }
    echo "<br>";
}
for($i=1;$i<5;$i++){
    for($j=0;$j<$i;$j++){
        echo "*";

    }
    echo "<br>";
}
echo "<hr>";
for($i=0;$i<4;$i++){
    for($j=0;$j<$i;$j++){
        echo "&nbsp";

    }
    
    for($j=0;$j<(3-$i);$j++){
        echo "*";

    }
    echo "<br>";
}
echo "<hr>";

$n=7;

for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($i>0 && $i<($n-1) && $j>0 && $j<($n-1)){
            echo "&nbsp";
        }else{
            echo "*";
        }
        

    }
    echo "<br>";
}
echo "<hr>";
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
             echo "*";
        }else if($j==0 || $j==$n-1){
            echo "*";
       }else{
        echo "&nbsp";
       }
       
    }
    echo "<br>";
}
echo "<hr>";
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
             echo "*";
        }else if($j==0 || $j==$n-1 || $i==$j || $i==$n-$j-1){
            echo "*";
       }else{
        echo "&nbsp";
       }
       
    }
    echo "<br>";
}