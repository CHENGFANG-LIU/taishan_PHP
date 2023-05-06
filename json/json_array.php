<pre>
<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
?>
<?php
// 讀取 JSON 文件內容
$jsonString = file_get_contents('data.json');

// 將 JSON 字符串轉換為 PHP 陣列
$data = json_decode($jsonString, true);

// 使用 print_r 函數打印 PHP 陣列

print_r($data);
?>
</pre>