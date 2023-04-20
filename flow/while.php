<?php
$i=0;
while($i<10){
echo $i*2;
$i++;
}
echo '最後$i的值' . $i;

echo '<hr>';
$i=0;
do{
    echo $i*2;
    $i++;
}while(
    $i<10
);
echo '最後$i的值' . $i;
$number=19;
$i=2;
while($i<$number){
    
    $check=false;
    if($number % $i == 0){
        $check=true;
        break;
    }
    $check=false;
    $i++;
}
if($check==false){
    echo $number;
}else{
    echo "no";
}
echo '<hr>';
$n=3;
while($n<98){
    $i=2;
    while($i<$n){
    
        $check=false;
        if($n % $i == 0){
            $check=true;
            break;
        }
        $check=false;
        $i++;
    }
    if($check==false){
        echo $n;
    }
    $n++;
}
