<style>
*{
    font-family: 'Courier New', Courier, monospace;
}
</style>
<?php
function equilateral_triangle($line){
    for($i=0;$i<$line;$i++){
        for($j=0;$j<($line-1-$i);$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<$i*2+1;$k++){
            echo "*";
        }
        echo "<br>";
    }
}
equilateral_triangle(6);

function right_triangle($line){
    for($i=1;$i<$line;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
    
        }
        echo "<br>";
    }
}
right_triangle(9);

function stars($shape,$line){
    switch ($shape) {
        case '正三角形':
            equilateral_triangle($line);
            break;
        case '直角三角形':
            right_triangle($line);
            break;
            
        default:
            echo "目前不支援";
            break;
    }
}
stars("正三角形",20);