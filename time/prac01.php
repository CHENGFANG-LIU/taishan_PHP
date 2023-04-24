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
// 2021/10/05
echo $day1=date("Y/m/d");
echo "<hr>";
// 10月5日 Tuesday
echo $day2=date("m月d日l");