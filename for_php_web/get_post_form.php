<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="target.php" method="get">
    <input type="text" name="getname">
    <input type="number" name="n">
    <input type="submit" value="送出">
</form>

<form action="target.php" method="post">
    <input type="text" name="postname">
    <input type="submit" value="送出">
</form>
<h1>post及檔案上傳</h1>
<form action="target.php" method="post" enctype="multipart/form-data">
    <input type="text" name="filename">
    <input type="file" name="img">
    <input type="submit" value="送出">
</form>



</body>
</html>