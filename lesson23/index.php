<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 23. Домашнее задание</title>
</head>

<body>
<?php
$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];

//for($i = 0; $i < count($goods); $i++) {
//    if($goods[$i]["price"] < 120){
//      $goods[$i]["price"] += 15;
//    };
//};

foreach ($goods as &$good) {
    if($good['price'] < 120) {
        $good['price'] += 15;
    }
}
echo "<pre>";
print_r($goods);

?>
</body>
</html>