<?php
$today=date("n",strtotime('now'));
$this_year=date("Y",strtotime('now'));
$this_month=date("n",strtotime('now'));
$firstday=date("Y-n-1");
echo $firstday_week=date("w",strtotime($firstday));




