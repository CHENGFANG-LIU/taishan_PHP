
<style>
</style>
<?php

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
echo "<table>";
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
