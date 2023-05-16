
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
        <div id="added">
            <label for="description">項目：</label>
            <input type="text" name="description[]"  class="description-input">
        </div>
        <button id="addc" >+</button>
        <div>
            <input type="submit" value="新增文章">
        </div>
        
    </form>
    
<script>
$(document).ready(function(){
  $("#addc").click(function(e){
    e.preventDefault();
    $("#added").append("<div><label for='description'>項目：</label><input type='text' name='description[]'  class='description-input'></div>")
  });
});
</script>

    
</body>
</html>