<!-- 給定兩個日期，計算中間間隔天數 2023-04-24 2023-10-07-->
<?php
$birth=strtotime("2023-10-07");
$now=strtotime("2023-04-24");
$days=($birth-$now)/(24*60*60);
echo $days;
echo "<hr>";
// 計算距離自己下一次生日還有幾天
$birthday=strtotime("2024-02-05");
// $now=strtotime("now");now用date("Y-m-d")可以計算在當天的12:00:00
$now=strtotime(date("Y-m-d"));
$xday=($birthday-$now)/(24*60*60);
echo $xday;
echo "<hr>";
// 2023/04/24
echo $day1=date("Y/m/d");
echo "<hr>";
// 4月24日 Monday
echo $day2=date("n月j日l");
echo "<hr>";
// 2021-10-5 12:9:5
echo date("Y-m-d G").(int)date("i").":".(int)date("s");
// 今天是西元2021年10月5日 上班日(或假日)
echo date("N")>=6?"是假日":"是工作日";
// 利用迴圈來計算連續五個周一的日期