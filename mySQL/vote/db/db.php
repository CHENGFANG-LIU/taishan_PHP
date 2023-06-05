<?php
// 目標:自動連線資料庫



class Db{
protected $dsn="mysql:host=localhost;charset=utf8;dbname=vote";
protected $table;
protected $pdo;
protected $user="root";
protected $pw="";

function __construct($table)
{
    $this->table=$table;
    // 要new一個PDO要在function裡
    $this->pdo=new PDO($this->dsn,$this->user,$this->pw);

    
}


function all(){
    return $this->pdo->query("select * from `$this->table`")->fetchAll(PDO::FETCH_ASSOC);
 
}



}

$topic= new Db('topics');

print_r($topic->all());


