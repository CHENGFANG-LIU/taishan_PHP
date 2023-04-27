<?php
$height=$_GET["height"];
$weight=$_GET["weight"];

echo "身高為{$height}";
echo "體重為{$weight}時";

$bmi=$weight/(($height/100)*($height/100));
echo "bmi={$bmi}";
$level="";
if($bmi>=27){
    $level='肥胖';

}else if($bmi>=24){
    $level='微胖';

}else if($bmi>=18.5){
    $level='正常';
}else{
    $level='過瘦';

}
echo $level;