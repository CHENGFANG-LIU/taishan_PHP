<?php
// 測試時間
$date=date_create();
date_date_set($date,2023,1,1);
$setdate= date_format($date,"Y-m-d");
// 月曆用變數
$today=date("n",strtotime('now'));
$this_year=date("Y",strtotime('now'));
$this_month=date("n",strtotime('now'));
$firstday=date("Y-n-1");
// 禮拜日是0
$firstday_week_space=date("w",strtotime($firstday));
$days=date("t",strtotime('now'));
$total_weeks=ceil(($firstday_week_space+$days)/7);
echo $last_week_space=7-(($firstday_week_space+$days)%7);



