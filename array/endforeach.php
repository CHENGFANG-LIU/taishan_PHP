<?php
$data=[
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
?>

<?php foreach ($data as $key => $value) : ?>
            <tr>
                <td><?= $value['id']; ?></td>
                <td><?= $value['name']; ?></td>
                <td><?= $value['mobile']; ?></td>
            </tr>
<?php endforeach; ?>

<?php foreach ($data as $key => $value): ?>
    <tr>
        <td><?= $value['id']?></td>
        <td><?= $value['name']?></td>
        <td><?= $value['mobile']?></td>
    </tr>
<?php endforeach; ?>