<?php
$students=["judy"=>["國文"=>95,"英文"=>64,"數學"=>70,"地理"=>90,"歷史"=>84],
        "amo"=>["國文"=>88,"英文"=>78,"數學"=>54,"地理"=>80,"歷史"=>71],
        "john"=>["國文"=>45,"英文"=>60,"數學"=>68,"地理"=>70,"歷史"=>62],
        "peter"=>["國文"=>59,"英文"=>32,"數學"=>77,"地理"=>54,"歷史"=>42],
        "hebe"=>["國文"=>71,"英文"=>62,"數學"=>80,"地理"=>62,"歷史"=>64]



];
echo '<pre>';
print_r($students);
echo '</pre>';
echo '<pre>';
print_r($students["judy"]);
echo '</pre>';
foreach ($students as $stu => $scores) {
    echo $stu;
    echo '<pre>';
    print_r($scores);
    echo '</pre>';
}
echo '<table>';
    echo '<tr>';
    echo '<td></td>';
        echo '<td>國文</td>';
        echo '<td>英文</td>';
        echo '<td>數學</td>';
        echo '<td>地理</td>';
        echo '<td>歷史</td>';
        
        
    echo '</tr>';
foreach ($students as $stu => $scores) {

    echo '<tr>';
    echo '<td>';
    echo $stu;
    echo '</td>';
    foreach($scores as $sub => $scores){
        echo '<td>';
        echo $scores;
        echo '</td>';
    }
    echo '</tr>';
    
}


echo '</table>';