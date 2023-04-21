<?php
$a=['姓名'=>'amy','年齡'=>18];
if(is_array($a)){
    echo "是陣列";
}else{
    echo "不是陣列";
}

echo "<br>";

// in_array()找value值
if(in_array(18,$a)){
    echo "有";
}else{
    echo "沒有";
}
echo "<br>";
if(in_array('年齡',$a)){
    echo "有";
}else{
    echo "沒有";
}

echo "<br>";

// call by value ;不改變參照值
// call by referrence;改變參照值像sort有&
$g=[6,8,51,2,32,5];
print_r($g);
echo "<br>";
$result=sort($g);
print_r($g);
echo "<br>";
print_r($result);

echo "<br>";

// sort()只回傳true
// array_fill瑱滿
$fill=array_fill(0,12,'hi');
print_r($fill);

echo "<br>";

// array_search回傳指定key
echo array_search('amy',$a);//name

echo "<br>";

// array_merge()
$merge2=array_merge($a,$g);
print_r($merge2);

echo "<br>";

// 要儲存陣列或上傳網路要先序列化(轉成字串)，也可以轉成jason
$se=serialize($a);
echo $se;
echo "<br>";
$un=unserialize($se);
print_r($un);
echo "<br>";

// 陣列轉字串(中間可以格字串或符號或空格)
$im=implode(" ",$a);
echo $im;
echo "<br>";
$pieces = explode(" ", $im);
print_r($pieces);

