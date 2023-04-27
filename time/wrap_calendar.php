
<style>
   .calendar{
        
        width: 50%;
        display: flex;
        flex-wrap: wrap;
        
    }
    .calendar div{
        flex-basis: 14%;
        height: 10vh;
        border: 1px solid black;
        /* 消除變粗框線 */
        margin-left: -1px;
        margin-top: -1px;
        
    }
</style>

<?php


$today=strtotime("now");

$month=date("n");

$days=date("t");

$firstDate=date("Y-n-1");

$finalDate=date("Y-n-t");

$firstDateWeek=date("w",strtotime($firstDate));

$weeks=ceil(($firstDateWeek+$days)/7);

$lastDateweek = (7*$weeks-$firstDateWeek-$days);

echo "<div class='calendar'>";

for($i=0;$i<$weeks;$i++){
    
    for($j=0;$j<7;$j++){
        echo "<div>";
        if($i==0 && $j<$firstDateWeek){
                echo "&nbsp";

        }
        else if($i==($weeks-1) && $j>=7-$lastDateweek ){
             echo "&nbsp";
        }
        else{
            echo $j+7*$i-($firstDateWeek-1);
        }
        echo "</div>";
    }
    

}
echo "</div>";
