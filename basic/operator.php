<?php
$check=!true;
echo $check;

$num1=10;
echo "$num1".$num1;
echo '$num1'.$num1;
$num2=23;
echo '<hr>';
echo $num1 + $num2;
echo '<hr>';
echo $num2 % $num1;
echo '<hr>';
echo $num2 / $num1;
$name='amy';
echo '<hr>';
// ['name'=>'amy'];
$score=66;
$level = ($score>=60)?'及格':'不及格';
echo $level;
echo '<hr>';
// 給定兩個變數，請思考如何交換兩個變數的值
$a=10;
$b = 50;
$c=$b;
$b=$a;
$a=$c;
echo $b;
echo $a;

