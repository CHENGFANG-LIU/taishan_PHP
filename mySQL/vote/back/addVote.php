
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../api/add_vote.php" method="post">
        <div>
            <label>主題</label>
            <input name="subject">
        </div>
        <div class="time-set">
            <div>
                <label>開啟時間</label>
                <input type="datetime-local" name="openTime">
            </div>
            <div>
                <label>關閉時間</label>
                <input type="datetime-local" name="closeTime">
            </div>
        </div>
        
        <div>
            <label>單複選</label>
            <input name="type">
        </div>
        <div>
            <input type="submit" value="新增">
        </div>
        
    </form>
    
</body>
</html>