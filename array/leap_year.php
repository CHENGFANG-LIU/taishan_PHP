<?php
$leap=[];
for($i=2023;$i<=2523;$i++){
    
    if($i % 4 ==0 && $i % 100!=0  || ($i %400 == 0 )){
        $leap[]=$i;
    }
}
foreach ($leap as $value) {
   echo $value;
   echo "<br>";
}
