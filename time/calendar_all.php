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
            width:60%;
            margin:5% auto 2% auto;
            
            padding: 20px;
            border-radius: 25px;
            position: absolute;
            
        }
        #today{
            display:flex;
            flex-wrap:wrap;
            width:60%;
            margin:5% auto 2% auto;
            background-color:white;
            padding: 20px;
            border-radius: 25px;
            position: absolute;
            z-index: -1;
        }
        #today div{
            width: calc(100% / 7);
            height: calc(80vh / 7);
            border: 1px solid black;
            
            


        }
        .dates div{
            width: calc(100% / 7);
            height: calc(80vh / 7);
            border: 1px solid black;
            
            


        }
        .holidays{
            background-color:red;
        }
        .datebutton1{
            position: absolute;
            bottom:10%;
            right:19%;
            background-color:white;
            border-radius:30%;
            width: 12%;
            height: 8%;
            font-size:24px;
            
            
        }
        .datebutton2{
            position: absolute;
            bottom:10%;
            right:44%;
            background-color:white;
            border-radius:30%;
            width: 12%;
            height: 8%;
            font-size:24px;
        }
        .datebutton3{
            position: absolute;
            bottom:10%;
            right:69%;
            background-color:white;
            border-radius:30%;
            width: 12%;
            height: 8%;
            font-size:24px;
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
$finalDateTime=strtotime("$this_year-$this_month-$days");
$finalDateWeek=date("w",$finalDateTime);
// 讀取 JSON 文件內容
$jsonString = file_get_contents('data.json');

// 將 JSON 字符串轉換為 PHP 陣列
$data = json_decode($jsonString, true);

// 今天的$i
$today_week=ceil($firstday_week_space+date('j')/7);







for($i=0;$i<=($total_weeks-1);$i++){
    for($j=0;$j<=6;$j++){
        $eachday=$j+($i*7)-$firstday_week_space+1;
        // 去掉所有不是當月的數字
        if($i==0 && $j<$firstday_week_space ){
            echo "<div>&nbsp</div>";

        }
        else if($i==($total_weeks-1) && $j>($finalDateWeek) ){
            echo "<div>&nbsp</div>";
            
            
       }
       // 2023用政府api
        else if($this_year == 2023){
            // 今年的第幾天
                $index_day=0;
                if($this_month==1){
                    $index_day=$eachday;
                }else{
                $index_day=$eachday;
                
                for($index_month=2;$index_month<=$this_month;$index_month++){
                    $index_months=$index_month-1;
                    $adddays=date("t",strtotime(date("$this_year-$index_months-1")));
                    
                    $index_day=($index_day+$adddays);
                    // echo "<h3>".$adddays."</h3>";
                    // echo $index_day;
                    

                    

                }
                }
            $index_fix=($index_day-1);    
                
            if($data[$index_fix]["是否放假"]==2) {
                
                    echo "<div class='holidays'>".$eachday."<br>".$data[$index_fix]['備註'].
                    "</div>";

            }
            else{
                echo  "<div>".$eachday.$data[$index_fix]['備註'].
                    "</div>";

            }
                
                
                    
            


        }
        // 其他年份
        // 每年的假日
        else if($this_month==1 && $eachday==1)
        {
            
            echo "<div class='holidays'>".$eachday."<br>開國紀念日</div>";
        }
        else{
            echo  "<div>".$eachday."</div>";

            
        }
        
        }
        

    
    
    
    
}




?>
</div>
<div id="today">
<?php
if($this_year=date("Y") && $this_month=date("n")){
    for($i=0;$i<=($total_weeks-1);$i++){
        for($j=0;$j<=6;$j++){
            
            // 去掉所有不是當月的數字
            if($i==$today_week && $j==date("w")){
                echo "<div ><img src='./img/star.png' style='width:100%'></div>";
    
            }
            else{
                echo "<div>&nbsp</div>";
    
                
            }
            
            }
            
    }

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
echo '<button class="datebutton3" ><a href="calendar_all.php?m='.$pre_month.'&y='.$pre_year.'">前一個月</a></button>';
echo '<button class="datebutton2" ><a href="calendar_all.php?m='.$next_month.'&y='.$next_year.'">後一個月</a></button>';
echo '<button class="datebutton1" ><a href="calendar_all.php?m='.date("n").'&y='.date("Y").'">回到這個月</a></button>';

?>
<style>
<?php
        switch ($this_month) {
            case $this_month>9:
                echo "body{
                    background-color:blue;
                    
                }";
                break;
            case $this_month>6:
                echo "body{
                    background-color:yellow;
                }";
                break;
            case $this_month>3:
                echo "body{
                    background-color:green;
                    z-index=-3;

                }";
                break;            
            default:
            echo "body{
                background-color:black;
            }";
                break;
        }
        
        
        
    ?>
    </style>
    
    
    
</body>
</html>






