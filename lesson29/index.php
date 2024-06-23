<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 29. Функции для работы с массивами</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/ref.array.php">Документация. Функции для работы с массивами</a><br><br>

<?php
function debug($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

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

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8,  9, 2, 5];
$mass_name = ["Антон", "Сергей", "Анна", "Анна", "Антон", "Антон", "Денис", "Юля", "Вера", "Юля", "Юля"];
$car = [
    "brand" => "Toyota",
    "model" => "Camry",
    "year" => 2021,
    "speed" => 2020,
    "wheels" => 4
];
?>


<?php
echo "<p>Подсчет значений в массиве первого уровня, а также подсчет всех элементов массива</p>";
//count — Подсчитывает количество элементов в массиве или в объекте Countable
//Считает количество первого уровня; второй параметр 1 подсчитает ВСЕ элементы массива
echo count($goods, 1);
echo "<hr><br>";


echo "<p>Подсчет кол-во одинаковых элементов в массиве</p>";
//array_count_values — Подсчитывает количество вхождений каждого отдельного значения в массиве
//Ключами будут значения в массиве, а значениями будут их кол-во повторений в массиве
debug(array_count_values($mass_name));
echo "<hr><br>";


echo "<p>Проверка на существования ключа массива</p>";
//array_key_exists — Проверяет, существует ли в массиве заданный ключ или индекс
var_dump(array_key_exists("year", $car));//Первое значение искомого ключа, второе массив где ищем ключ
echo "<hr><br>";


echo "<p>Проверить есть ли значение в массиве</p>";
//in_array — Проверяет, присутствует ли в массиве значение
var_dump(in_array(2021, $car));
echo "<hr><br>";


echo "<p>Поиск ключа по его значению</p>";
//array_search — Ищет значение в массиве и в случае успешного поиска возвращает ключ первого найденного элемента
echo array_search("Camry", $car);
echo "<hr><br>";


echo "<p>Преобразование ключей в значения массива, нумерация массива проставляется автоматически</p>";
//array_keys — Возвращает все или некоторое подмножество ключей массива
debug(array_keys($car));
echo "<hr><br>";

echo "<p>Убрать повторяющиеся значения из массива</p>";
//array_unique — Убирает повторяющиеся значения из массива
debug(array_unique($nums));
echo "<hr><br>";






?>

</body>
</html>