<?php
// 以表格方式呈現整個月份的日期
// 可以在特殊日期中顯示資訊(假日或紀念日)
// 嘗試以block box或flex box的方式製作月曆
// 四月為例
echo $today=strtotime("now");
echo '<br>';
echo $month=date("n");
echo '<br>';
echo $days=date("t");
echo '<br>';
echo $firstDate=date("Y-n-1");
echo '<br>';
echo $finalDate=date("Y-n-t");
echo '<br>';
echo $firstDateWeek=date("w",strtotime($firstDate));
echo '<br>';
echo $weeks=ceil(($firstDateWeek+$days)/7);
echo '<br>';
echo $lastDateweek = (7*$weeks-$firstDateWeek-$days);
echo '<br>';
echo "<table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
";

for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        if($i==0 && $j<$firstDateWeek){
                echo "&nbsp";

        }
        else if($i==($weeks-1) && $j>=7-$lastDateweek ){
             echo "&nbsp";
        }
        else{
            echo $j+7*$i-($firstDateWeek-1);
        }
        echo "</td>";
    }
    echo "</tr>";

}
echo "</table>";


// for($i=0;$i<30;$i++){
//     $day=;
//     echo date("j",);
// }

$today=strtotime("now");    //取得當前的時間秒數
$month=date("n",$today);    //取得當前的月份
$days=date("t",$today);     //取得當前月份的總天數
$firstDate=date("Y-n-1",$today);    //取得當前月份第一天
$finalDate=date("Y-n-t",$today);    //取得當前月份最後一天
$firstDateWeek=date("w",strtotime($firstDate)); //取得當前月份第一天的星期
$finalDateWeek=date("w",strtotime($finalDate)); //取得當前月份最後一天的星期
$weeks=ceil(($days+$firstDateWeek)/7);  //計算當前月份的天數會佔幾周
$firstWeekSpace=$firstDateWeek-1;       //計算當前月份第一周的空白日(或前一個月份佔幾天)
echo "月:".$month;
echo "<br>";
echo "天數:".$days;
echo "<br>";
echo "第1天:".$firstDate;
echo "<br>";
echo "最後1天:".$finalDate;
echo "<br>";
echo "第1天星期:".$firstDateWeek;
echo "<br>";
echo "最後1天星期:".$finalDateWeek;
echo "<br>";
echo "周數:".$weeks;
echo "<br>";

//先畫出固定的表頭內容
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";


//使用迴圈來畫出當前月的周數
for($i=0;$i<$weeks;$i++){
    echo "<tr>";

    //使用迴圈來畫出當周的天數
    for($j=0;$j<7;$j++){
        echo "<td>";
        if(($i==0 && $j<$firstDateWeek) || (($i==$weeks-1) && $j>$finalDateWeek)){  //判斷當周是否為第一周
            echo '&nbsp';
        }else{
            echo $j+7*$i-$firstWeekSpace;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";