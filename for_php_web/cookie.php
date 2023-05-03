<h1>cookie</h1>

<?php

// 0代表
// time()回傳現在時間
setcookie("name",'amy',strtotime("2023")+60);

// 如果上面的cookie已過期下面的echo會還沒有name的變數
echo $_COOKIE['name'];