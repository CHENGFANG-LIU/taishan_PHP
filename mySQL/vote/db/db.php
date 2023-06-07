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





function all(...$arg)
    {
        $sql = "select * from $this->table ";

        if (!empty($arg)) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {

                    $tmp[] = "`$key`='$value'";
                }

                $sql = $sql .  " where " . join(" && ", $tmp);
            } else {

                $sql = $sql .  $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql = $sql .  $arg[1];
        }

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    

}

$topic= new Db('topics');

print_r($topic->all());


