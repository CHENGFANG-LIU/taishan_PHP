<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #weather1{
            width: 500px;
            height: 500px;
            position: absolute;
            left: 80%;
            top: 1%;
            width: 20%;
            z-index: 7;
            animation-name: box;
            animation-duration: 2s;
            font-size: 20px;
        }
    
        p{
            position: absolute;
            left: 30%;
            top: 25%;
        }
        @keyframes box {
  0%   { width: 0px;height: 0px;position: absolute;
    font-size: 0px;
     
     left: 90%;
     top: 10%;}
  80%  { width: 0px;height: 0px;position: absolute;
     
    font-size: 0px;
     left: 90%;
     top: 10%;}
  100% { width: 500px;
            height: 500px;
            position: absolute;
            left: 80%;
            top: 1%;
            width: 20%;
            z-index: 7;
            font-size: 20px;
        }
}
    </style>
</head>
<body>
<?php
// 獲取 URL 返回的 JSON 字符串
$jsonString = file_get_contents('https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-D0047-061?Authorization=CWB-1A7A6B72-723E-4837-8059-6F734BC4717F&limit=1&offset=0&elementName=Wx');

// 將 JSON 字符串轉換為 PHP 陣列
$data = json_decode($jsonString, true);

// 使用 print_r 函數打印 PHP 陣列
// echo "<pre>";
// print_r($data);
// echo '</pre>';
$w_today=$data["records"]["locations"][0]["location"][0]["weatherElement"][0]["time"][0]['elementValue'][0]['value'];
$w_toromorrow=$data["records"]["locations"][0]["location"][0]["weatherElement"][0]["time"][7]['elementValue'][0]['value'];
?>
<div id="weather1">
    <img src="./img/speak.png" style="width:100%; height:100%;">
    <p>今天天氣是<?=$w_today?>天～<br>
        明天天氣是<?=$w_toromorrow?>天～
    <p>
</div>
    
</body>
</html>