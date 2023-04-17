<?php
function f1($number){

    $number++;
}
function f2(&$number){

    $number++;
}
function f3($number){

    return $number++;
}
function f4($number){
    $number++;
    echo $number;
}

$x=1;
echo $x;
// 1
f1($x);
echo $x;
// 1
f1($x);
echo $x;
// 1
f3($x);
echo $x;
// 1
f3($x);
echo $x;
// 1
f2($x);
echo $x;
// 2
f2($x);
echo $x;
// 3