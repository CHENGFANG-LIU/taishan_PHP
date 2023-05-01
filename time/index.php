<?php
date_default_timezone_set("Asia/Tokyo");
echo date("y-m-d h:i:s");
echo '<hr>';
// strtotime()將時間換成秒數
echo strtotime("23-04-25 02:14:19");
echo '<br>';
echo strtotime('now');
$yesterday=strtotime('now')-24*60*60;
echo '<br>';
// 將秒數轉回年月日時間
echo date("y-m-d h:i:s",$yesterday);
// strtotime()將時間換成秒數
$today=strtotime('now');
$tomorrow=strtotime("+1 days",$today);
echo $tomorrow;         //1682399659
echo date("y-m-d h:i:s",$tomorrow);   //23-04-25 02:14:19
//this year
echo date("Y",strtotime('now'));
echo '<hr>';
// this month
echo '<hr>';
echo date("n",strtotime('now'));
// this day
echo date("j",strtotime('now'));


