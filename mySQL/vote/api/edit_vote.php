<?php
include_once '../db.php';
// topics資料表
$sqlTopic=' update `topics`
            set 
            where
            ';



// option資料表
$options=$pdo->query('select `id` from `option` where `subject_id`="{$POST["subject_id"]}"')
        ->fetchAll(PDO::FETCH_ASSOC);


if(!empty($options)){
    if(isset($_POST["opt_id"])){
        foreach($opt_id as $opt){

        }

    }
}        













