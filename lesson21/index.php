<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 21. Массивы</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.types.array.php">Документация. Массивы</a><br><br>

<?php
$arr = ["иванов", "Петров", "Сидоров"];
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<hr>
<p>Добавление в массив</p>
<?php
$arr[] = "Антонов";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<hr>
<p>Добавление в массив по ключу</p>
<?php
$arr[8] = "Данилов";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>

<hr>
<p>Вывод элемента массива:</p>
<?php
echo $arr[2];
?>

<hr>
<p>Ассоциативный массив, в таком массиве ключом являются строки:</p>
<?php
$goods = [
    "title" => "Nokia",
    "price" => 100,
    "qty" => 10
];
echo "<pre>";
print_r($goods);
echo "</pre>";
?>
<hr>
<p>Многомерный массив</p>
<?php
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
    ]
];
echo "<pre>";
print_r($tov);
echo "</pre>";
?>
?>
<hr>
<p>Заполнение массива циклом</p>
<?php
for($i = 0; $i < 10; $i++){
    $asd[] = $i;
}
echo "<pre>";
print_r($asd);
echo "</pre>";
?>


</body>
</html>