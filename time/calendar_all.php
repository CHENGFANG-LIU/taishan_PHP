<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
        }
        .dates{
            display:flex;
            flex-wrap:wrap;
            width:70%;
            
        }
        .dates div{
            width: calc(99% / 7);
            height: calc(90vh / 7);
            border: 1px solid black;

        }
    </style>
</head>
<body>


<!-- 月曆本人 -->
<div class="dates">
<?php
// 測試時間
$date=date_create();
date_date_set($date,2023,1,1);
$setdate= date_format($date,"Y-m-d");
// 月曆用變數
$today=date("n",strtotime('now'));
$this_year=(isset($_GET["y"]))?$_GET["y"]:date("Y");
$this_month=(isset($_GET["m"]))?$_GET["m"]:date("n");
$firstday=date("$this_year-$this_month-1");
// 禮拜日是0
$firstday_week_space=date("w",strtotime($firstday));
$days=date("t",strtotime($firstday));
$total_weeks=ceil(($firstday_week_space+$days)/7);
$last_week_space=7-(($firstday_week_space+$days)%7);
// 讀取 JSON 文件內容
$jsonString = file_get_contents('data.json');

// 將 JSON 字符串轉換為 PHP 陣列
$data = json_decode($jsonString, true);






for($i=0;$i<=$total_weeks;$i++){
    for($j=0;$j<=6;$j++){
        $eachday=$j+($i*7)-$firstday_week_space+1;
        // 2023用政府api
        if($this_year == 2023){
            // 今年的第幾天
                $index_day=0;
                if($this_month==1){
                    $index_day=$eachday;
                }else{
                $index_day=$eachday;
                $index_month=2;
                while($index_month<=$this_month){
                    $index_months=$index_month-1;
                    $adddays=date("t",strtotime(date("$this_year-$index_months-1")));
                    
                    $index_day=$index_day+$adddays;
                    $index_month++;
                    
                    

                    

                }
                }
                echo $index_day;
                
            // switch ($data["是否放假"]) {
            //     case '2':
            //         echo "<div>".$eachday.$data[$index_day]['備註'].
            //         "</div>";

            //         break;
                
            //     default:
            //     echo "<div>".$eachday."</div>";
            //         break;
            // }


        }
        // 其他年份
        // else{
            echo "<div>".$eachday."</div>";
            
        // }
        // if($j<=$firstday_week_space && $i==0){

        }
        

    
    
    
    
    // }



}

?>
</div>

<?php
// 上一頁下一頁
$pre_month=($this_month-1);
$next_month=($this_month+1);
$pre_year=($this_year-1);
$next_year=($this_year+1);
//判斷當當前月份為1月時，前一個月應為前年的12，否則只要減1即可
if($this_month == 1){
    $pre_year=$this_year-1;
    $pre_month=12;
}else{
    $pre_year=$this_year;
    $pre_month=$this_month-1;
}

//判斷當當前月份為12月時，下一個月應為明年的1，否則只要加1即可
if($this_month==12){
    $next_year=$this_year+1;
    $next_month=1;
}else{
    $next_year=$this_year;
    $next_month=$this_month+1;
}
echo '<a href="calendar_all.php?m='.$pre_month.'&y='.$pre_year.'">前一個月</a>';
echo '<a href="calendar_all.php?m='.$next_month.'&y='.$next_year.'">後一個月</a>';
echo $this_year;
?>

</body>
</html>






