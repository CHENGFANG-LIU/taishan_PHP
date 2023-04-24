<?php
// 中文一個字三個位元
$str='今天天氣';
echo substr($str,0,3);//今
// mb針對雙位元(中文英文)
echo mb_substr($str,0,3);
$str2='Today 真是個 good day';
echo mb_substr($str2,0,7);//Today 真
// trim()為了避免駭客所以去除頭尾空白,檢查網頁原始碼才看的出來
$haves='  今天 天氣很好                        ';
$haves2=' 今天 天氣很好 ';
echo "<br>";
echo $haves;
echo "<br>";
echo $haves2;
echo "<br>";
echo trim($haves2);
// str_replace用來取代字串
$replace='很糟';
echo "<br>";
echo str_replace(['天',$replace],['日','很糟'],$str);
// explode()用來拆句子
$article1="國際清算銀行（BIS）公布最新統計，3月新台幣實質匯率指數跌至98.62，台灣主要貿易競爭對手國貨幣韓元則是連兩降至94.79，台韓實質匯率指數維持新台幣強過韓元的「死亡交叉」格局，差距進一步擴大至3.83，創四個月新高，顯示台灣在出口報價競爭力上持續落後韓國。";
$ex=explode("，",$article1);
echo "<pre>";
print_r($ex);
echo "</pre>";
// 再用implode()或 join()合起來
$im=implode(",",$ex);
echo $im;
echo "<br>";
// mb_strpos()或strpos()找第一個關鍵字
$search="3月新台幣實質匯率指數跌至98.62";
echo mb_strpos($search,'實');
// mb_strlen()或strlen()字串長度
echo "<br>";
echo strlen($article1);
echo "<br>";
echo mb_strlen($article1);
