<?php

// 大樂透有六個不重複號碼,從1號到38號


$lotto=[];
while(count($lotto)<6){
    $ball=rand(1,38);
    if(!in_array($ball,$lotto)){
        $lotto[]=$ball;
    }
    echo "<pre>";
    print_r($lotto);
    echo "</pre>";
}
echo "<div>";
    print_r($lotto);
    echo "</div>";
