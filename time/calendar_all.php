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
            margin:1% auto 2% auto;
            left: 20%;
            padding: 20px;
            border-radius: 25px;
            position: absolute;
            
        }
        #today{
            display:flex;
            flex-wrap:wrap;
            width:60%;
            margin:1% auto 2% auto;
            background-color:white;
            padding: 20px;
            border-radius: 25px;
            position: absolute;
            z-index: -1;
            left: 20%;
        }
        #bfo{
            display:flex;
            flex-wrap:wrap;
            width:60%;
            margin:1% auto 2% auto;
            background-color:white;
            padding: 20px;
            border-radius: 25px;
            position: absolute;
            z-index: -5;
            height: 80vh;
            left: 20%;
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
        .rightone{
            position: absolute;
            left: 80%;
            top: 50%;
            width: 20%;

        }
        .lemed{
            position: absolute;
            left: 0%;
            top: 10%;
            width: 20%;
        }
        #wb{
            position: absolute;
            left: 0%;
            top: 50%;
        }
        form{
            width: 50%;
            height: 5vh;
        }
        #month_rt{
            
            position: absolute;
            left: 40%;
            top: 0%;
            width: 20%;
            font-size: 50px;
            
        }
        
    </style>
</head>
<body>
    <!-- 直接要輸入年月 -->
    <form action="calendar_all.php" method="get">
        <label >年份:</label>
        <input type="number" name="y" value="2023">
        <label >月份:</label>
        <input type="number" name="m" value="5">
    <input type="submit" value="送出">
</form>



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
$today_week=floor($firstday_week_space+date('j')/7)-1;







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
                    "<br><img src='./img/rest.png' style='width:50%'></div>";

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
            
            echo "<div class='holidays'>".$eachday."<br>開國紀念日<img src='./img/rest.png' style='width:50%'></div>";
        }
        else if($this_month==2 && $eachday==28)
        {
            
            echo "<div class='holidays'>".$eachday."<br>和平紀念日<img src='./img/rest.png' style='width:50%'></div>";
        }
        else if($this_month==4 && $eachday==4)
        {
            
            echo "<div class='holidays'>".$eachday."<br>兒童節<br><img src='./img/rest.png' style='width:50%'></div>";
        }
        else if($this_month==4 && $eachday==5)
        {
            
            echo "<div class='holidays'>".$eachday."<br>民族掃墓節<br><img src='./img/rest.png' style='width:50%'></div>";
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

if($this_year== date("Y") && $this_month== date("n")){
    for($a=0;$a<=($total_weeks-1);$a++){
        for($b=0;$b<=6;$b++){
            
            if($a==$today_week && $b==date("w")){
                echo "<div ><br><br><img src='./img/star.png' style='width:50%'></div>";
    
            }
            else{
                echo "<div>&nbsp</div>";
    
            }
            
            }
            
    }

}


?>
</div>
<div id='bfo'></div>

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

<?php
        switch ($this_month) {
            case $this_month>10:
                echo "
                <style>
                body{
                    background-color:#B0E0E6;
                    
                }
                </style>
                <img class='rightone' src='./img/whitebear.png'>
                <img class='lemed' src='./img/snow.png'>
                ";
                break;
            case $this_month>7:
                echo "
                <style>
                body{
                    background-color:#FFE5B4;
                    
                }
                </style>
                <img class='rightone' src='./img/cat.png'>
                <img class='lemed' src='./img/maple.png'>
                ";
                break;
            case $this_month>4:
                echo "
                <style>
                body{
                    background-color:#E6E6FA;
                    
                }
                </style>
                <img class='rightone' src='./img/藍恐龍.png'>
                <img class='lemed' src='./img/lavendar2.png' >
                ";
                break;    
            case $this_month>1:
                echo "
                <style>
                body{
                        background-color:#FFD9E6;
                        
                }
                </style>
                <img class='rightone' src='./img/river.png'>
                <img class='lemed' src='./img/sakura.png'>
                ";
                break;              
            default:
            echo "
                <style>
                body{
                    background-color:#B0E0E6;
                    
                }
                </style>
                <img class='rightone' src='./img/whitebear.png'>
                <img class='lemed' src='./img/snow.png'>
                ";

                break;
        }
        
        
        
    ?>
    
    
    <img src="./img/woodboard.png" id='wb'>
    <?php
include('weather/weather.php');
?>
<div id='month_rt'>
    <?php
    echo $this_year;
    echo '年';
    echo $this_month;
    echo '月';
    ?>
</div>
</body>
</html>






