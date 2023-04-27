<?php
// 傳過來的資料都是字串,因為傳過來的資料是個陣列所以一次只能用一個動作
// echo $_GET['getname'];
// echo $_POST['postname'];
echo $_POST['filename'];
// 檔案要用另外的格式
// 如果一次有很多請求就用過濾的

$a;//等於$a=null;

if(isset($a)){
echo "有被宣告";
}else{
echo "沒有被宣告";
}



echo '<hr><h1>$_POST是全域變數，一開始就宣告，用isset沒意義</h1>';
if(isset($_POST)){
    echo "有被宣告";
    }else{
    echo "沒有被宣告";
    }




echo "<hr><h1>// isset的用法，判斷裡面特定key存不存在</h1>";
if(isset($_POST['filename'])){
    echo "有filename";
    }else{
    echo "沒有filename";
    }




    
echo "<hr><h1>// empty的用法，用來分流GET POST剛剛好</h1>";
if(empty($_POST)){
    echo "沒東西";
}else{
    echo "有東西";
    print_r($_POST);
}


