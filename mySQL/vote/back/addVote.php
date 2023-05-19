
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../js/jquery-3.7.0.min.js"></script>
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
        <div class="options">        
        <div>
            <label for="description">項目：</label>
            <input type="text" name="description[]"  class="description-input">
            <span onclick="addOption()">+</span>
            <span onclick="removeOption(this)">-</span>
        </div>
        </div>
        <!-- <div id="added">
            <div>
                <label for="description">項目：</label>
                <input type="text" name="description[]"  class="description-input">
                <button id="addc" onclick="addOption()">+</button>
                
                <span id="remove" onclick="removeO(this)">-</span>
            </div>
        </div> -->
        
        
        <div>
            <input type="submit" value="新增文章">
        </div>
        
    </form>
    
<script>
// $(document).ready(function(){
//   $("#addc").click(function(e){
//     e.preventDefault();
//     $("#added").append("<div><label for='description'>項目：</label><input type='text' name='description[]'  class='description-input'></div>")
//   });
// });


// let addc=document.getElementById("addc");
// let added = document.createElement("added");
// let div = document.createElement("div");

// document.get
// div.append(`<label for="description">項目：</label>
//             <input type="text" name="description[]"  class="description-input">`, div);

// console.log(div.childNodes); 
// NodeList [ #text "Some text", <p> ]

// function addOption(){
//     document.getElementById('addc').preventDefault();
    
//     console.log("add");
//     let opt=`<div>
//             <label for="description">項目：</label>
//             <input type="text" name="description[]"  class="description-input">
//             <span id="addc" onclick="addOption()">+</span>
//             <span id="remove" onclick="removeO(this)">-</span>
//             </div>`;
//     $('#added').append(opt);
// }
// function removeO(this){
//     let dom =$(this).parent;
//     $(dom).remove();
// }

function addOption(){
    let opt=`<div>
                <label for="description">項目：</label>
                <input type="text" name="description[]"  class="description-input">
                <span onclick="addOption()">+</span>
                <span onclick="removeOption(this)">-</span>
            </div>`
    $(".options").append(opt);    
}

function removeOption(el){
    let dom=$(el).parent()
    $(dom).remove();
}

</script>

    
</body>
</html>