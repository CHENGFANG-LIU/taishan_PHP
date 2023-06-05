<?php
// 用來傾印陣列內容
function dd($arr){
echo "<pre>";  
var_dump($arr);
echo "</pre>";
}
$myarr=[
    0=>[

        "id"=>"1",
        "name"=>"amy",
        "mobile"=>"0911-111-111"
    ],
    1=>[

        "id"=>"2",
        "name"=>"v",
        "mobile"=>"0922-111-111"
    ],
    2=>[

        "id"=>"3",
        "name"=>"bob",
        "mobile"=>"0933-111-111"
    ]

];
dd($myarr);
var_dump($myarr);
