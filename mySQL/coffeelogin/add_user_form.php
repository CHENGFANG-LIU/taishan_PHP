<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>會員註冊</h1>
    <form action="add_user.php" method="POST">
        <p>
            <label for="name">姓名</label>
            <input type="text" name="name" id="name">
        </p>
        
        <p>
            <label for="">帳號</label>
            <input type="text" name="acc" id="">
        </p>
        <p>
            <label for="">密碼</label>
            <input type="text" name="password" id="">
        </p>
        <p>
            <label for="">電子郵件</label>
            <input type="text" name="mail" id="">
        </p>
        <p>
            <label for="">電話</label>
            <input type="number" name="phone" id="phone">
        </p>
        <p>
            <button type="submit">送出</button>
        </p>
        

    </form>
    <button type="submit">重置</button>
    
</body>
</html>