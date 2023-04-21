<?php
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j =".$i*$j;
    }
}
print_r($nine);
foreach($nine as $key => $val){
    var_dump($val);
    

}

