<?php
$score=71;

if($score>60){
    echo "score is" .$score;
    echo "恭喜及格拉";

}else{
    echo 'score is'.$score;
    echo '再接再厲';
}
echo '<hr>';

switch ($score) {
    case $score>=80:
        echo "A";
        break;
    case $score>=60:
        echo "B";
        break;    

    default:
        echo "E";
        break;
}
echo '<hr>';
// 巢狀結構不要超過五層
if($score>60){
    if($score>=80){
        echo "A";
    }else{
        echo "B";
    }

}else{
    echo 'score is'.$score;
    echo '再接再厲';
}
echo '<hr>';
// 巢狀if else
if ($score>90){
    echo "A";
}else if($score>80){
    echo "B";
}
else if($score>70){
    echo "C";
}

else if($score>60){
    echo "D";
}
else{
    echo "E"; 
}
echo '<hr>';
// 巢狀if else 寫死不看順序
if ($score>=90 && $score<+100){
    echo "A";
    $level=1;
}
else if($score>70 && $score<80){
    echo "C";
    $level=3;
}
else if($score>60 && $score<70){
    echo "D";
    $level=4;
}
else if($score>80 && $score<90){
    echo "B";
    $level=2;
}
else{
    echo "E"; 
    $level=5;
}
echo '<hr>';
echo $level;
echo '<hr>';
for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}
echo '$i=' . $i;
// 沒有i+2的用法
for($i=0;$i<10;$i=$i+2){
    echo $i;
    echo "<br>";
}
echo '<hr>';
for($i=0;$i<10;$i=$i+2){
    echo $i;
    echo "<br>";
}
for($i=3;$i<98;$i=$i+2){
    echo $i.',';
    }
    echo '<hr>';
$aaa=1;
for($i=3;$i<97;$i++){
    for($j=3;$j<$i;$j++){
    if($i % $j ==0 ){
        $aaa=1;
    }else{
        echo $i.',';
    }
    }
    }
    
    echo '<hr>';