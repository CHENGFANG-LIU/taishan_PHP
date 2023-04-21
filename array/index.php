<?php
$a=['姓名'=>'amy','年齡'=>18];
echo $a['年齡'];
echo '<br>';
print_r($a);
echo '<br>';
// 保留預先格是比較好看
echo '<pre>';
print_r($a);
echo '</pre>';
// 字串會被當成陣列集合
$b=[];
$b='aperson';
print_r($b);
echo '<br>';
echo $b[2];//e
echo '<br>';
// 陣列內格式可以指定key也可以不指定key混和
$d=[];
$d[]='01';
$d[]=65;
$d['name']='vivi';
print_r($d);
// 多維陣列 陣列裡的陣列
echo '<pre>';
$n=[$a,$d,2,'key'=>[$a]];
print_r($n);
echo '</pre>';