<?php 

$matches = [
    [
        'Home' => 'Olimpia Milano',
        'Visitors' => 'Cantu',
        'Home point' => '55',
        'Visitors point' => '60'
    ],
    [
        'Home' => 'Virtus Bologna',
        'Visitors' => 'Treviso',
        'Home point' => '73',
        'Visitors point' => '71'
    ],
    [
        'Home' => 'Venezia',
        'Visitors' => 'Pistoia',
        'Home point' => '85',
        'Visitors point' => '40'
    ]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($matches as $key => $match) :?>
        <div>
            <?= $match['Home'] . ' - ' . $match['Visitors'] . ' | ' . $match['Home point'] . '-' . $match['Visitors point']  ?>
        </div>
    <?php endforeach ?>
</body>

</html>