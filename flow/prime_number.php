<?php
for($n=3;$n<98;$n++){
    for($i=2;$i<$n;$i++){
        $is_a_p= false;
        if($n % $i == 0 ){
            
            $is_a_p= false;
            break;
        }
        else{
            $is_a_p =true;
            
        }
        
        }
    
    if($is_a_p ==true){
            echo $n;
    }
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