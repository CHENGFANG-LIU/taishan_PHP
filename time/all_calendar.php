
<style>
   div{
        width: 500px;

        display: flex;
        flex-wrap: wrap;
    }
    p{
        flex-basis: 14%;
    }
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
echo "<div>";
for($i=0;$i<$weeks;$i++){
    
    for($j=0;$j<7;$j++){
        echo "<p>";
        if($i==0 && $j<$firstDateWeek){
                echo "&nbsp";

        }
        else if($i==($weeks-1) && $j>=7-$lastDateweek ){
             echo "&nbsp";
        }
        else{
            echo $j+7*$i-($firstDateWeek-1);
        }
        echo "</p>";
    }
    

}
echo "</div>";
