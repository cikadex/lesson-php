<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 22. Цикл foreach</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.foreach.php">Документация. Цикл foreach</a><br><br>
<p>foreach - перебирает массив поэлементно; <b>ВАЖНО:</b> в данный цикл нельзя добавить новые элементы</p>
<p>foreach($mass as $value) - получаем только значения массива</p>
<p>foreach($mass as $key => $value) - получаем ключ и значения ключа</p>

<?php
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($nums as $num) {
    echo $num . '<br>';
}

echo "<hr>";

foreach ($nums as $k => $v) {
    echo "Ключ:" . $k . " Значение:" . $v . '<br>';
}

$tov = [
    [
        "title" => "Nokia",
        "price" => 100,
        "qty" => 10
    ],
    [
        "title" => "Sony",
        "price" => 220,
        "qty" => 17
    ],
    [
        "title" => "Lg",
        "price" => 90,
        "qty" => 5
    ]
];

echo "<hr>";

foreach ($tov as $value) {
    echo "Наименование: " . $value["title"] . "<br>";
    echo 'Цена: ' . $value["price"] . "<br>";
    echo 'Кол-во: ' . $value["qty"] . "<br>";
    echo "<hr>";
}
?>
<br><br>
<p><b>Перебор массива при помощи цикла for</b></p>
<?php
for ($i = 0; $i < 3; $i++) {
    echo "Наименование: {$tov[$i]['title']} <br>";
    echo "Цена: {$tov[$i]['price']} <br>";
    echo "Кол-во: {$tov[$i]['qty']} <br>";
    echo '<hr>';
}
?>
<br><br>
<p><b>Добавление новых элементов в массив при помощи цикла for</b></p>
<?php
for ($i = 0; $i < 3; $i++) {
    $tov[$i]["total"] = $tov[$i]["price"] * $tov[$i]["qty"];
}

echo "<pre>";
print_r($tov);
echo "</pre>";
?>

<br><br>
<p><b>Добавление новых элементов в массив при помощи цикла foreach</b></p>
<?php
$tovi = [
    [
        "title" => "Телевизор",
        "price" => 100,
        "qty" => 10
    ],
    [
        "title" => "Телефон",
        "price" => 220,
        "qty" => 17
    ],
    [
        "title" => "Стол",
        "price" => 90,
        "qty" => 5
    ]
];
foreach ($tovi as &$vi) {
    $vi["total"] = $vi["price"] * $vi["qty"] + 1000000;
}

echo "<pre>";
print_r($tovi);
echo "</pre>";

?>
</body>
</html>