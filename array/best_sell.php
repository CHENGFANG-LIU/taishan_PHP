<?php
function bestprofit($arr1){
$maxprofit=0;
$minestValue=PHP_INT_MAX;
foreach($arr1 as $value){
    if($minestValue>$value){
        $minestValue=$value;
    }else if(($value-$minestValue)>$maxprofit){
$maxprofit=$value-$minestValue;

    }
}
return $maxprofit;
}
$arrex=[7,2,1,5,4,6,9];
$ans=bestprofit($arrex);
echo $ans;