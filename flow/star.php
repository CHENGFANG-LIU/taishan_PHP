<style>

</style>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<(5-$i);$j++){
        echo "*";

    }
    echo "<br>";
}
for($i=1;$i<5;$i++){
    for($j=0;$j<$i;$j++){
        echo "*";

    }
    echo "<br>";
}
for($i=0;$i<4;$i++){
    for($j=0;$j<$i;$j++){
        echo "&nbsp";

    }
    
    for($j=0;$j<(3-$i);$j++){
        echo "*";

    }
    echo "<br>";
}
