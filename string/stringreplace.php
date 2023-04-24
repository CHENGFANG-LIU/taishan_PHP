<?php
$str="aaddw1123";
$re=str_replace(['a','d','w',1,2,3],"*",$str);
echo $re;
echo "<br>";
$length=mb_strlen($str);
echo str_repeat('*',$length);
// 可以用在密碼