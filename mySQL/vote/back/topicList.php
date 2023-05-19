<main>
    
    </main>
    <div class="topic-row">
        
            <div>主題</div>
            <div>狀態</div>
            <div>期間</div>
            <div>投票數</div>
            <div>操作</div>
        
    </div>
    <?php
    $sql="select * from `topics`";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){

    
    ?>
    <div class="topic-row">
        
            <div><?=$row["subject"]?></div>
            <div></div>
            <div><?=$row["open_time"]?>~<?=$row["close_time"]?></div>
            <div></div>
            <div>
                <button onclick="location.href='./back/editVote.php?id=<?=$row['id']?>'">編輯</button>
            </div>
            <div>
                <button onclick="location.href='./back/deleteVote.php'">刪除</button>
            </div>
        
    </div>
    <?php
    }
    ?>
