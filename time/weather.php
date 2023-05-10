<!-- 陰 晴 -->

<?php
// 獲取 URL 返回的 JSON 字符串
$jsonString = file_get_contents('https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWB-1A7A6B72-723E-4837-8059-6F734BC4717F&limit=3&stationId=C0AJ80&elementName=Weather');

// 將 JSON 字符串轉換為 PHP 陣列
$data = json_decode($jsonString, true);

// 使用 print_r 函數打印 PHP 陣列
echo "<pre>";
print_r($data);
echo '</pre>';
echo $data["records"]["location"][0]["weatherElement"][0]["elementValue"];
?>