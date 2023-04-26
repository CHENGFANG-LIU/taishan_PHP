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
