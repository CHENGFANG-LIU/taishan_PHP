<?php
// 單引號跟雙引號是一樣的
$name='amy';


// echo和print()是一樣的
echo 'my name is '.$name.'</br>';
print('my name is '.$name.'</br>');

// 常數不用$，不可變
define('PU',12);
echo PU;

// 雙引號包起來的一定是字串，單引號包起來的不一定是字串



// 可變變數 $ $$ $$$ 如果name要一直換會很方便
$change_name='mack';

$$change_name= 55;

echo $mack ;