<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dsn='mysql:host=localhost;charset=utf8;dbname=limit_vote';
    $pdo= new PDO($dsn,'root','');
    $tickets=$pdo->query("select * from `tickets`")->fetchAll(PDO::FETCH_ASSOC);
    foreach($tickets as $ticket){
        echo "<form method='post' action='choose.php'><input name='t_name' >".$ticket['t_name']."<button type='submit'>按</button><form>";
        
    }
    
    ?>
</body>
</html>