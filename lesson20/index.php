<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 20. Выражение match</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.match.php">Документация. Выражение match</a><br><br>

<p>match - возвращает результат, т.е. результат мы можем записать в переменную</p>
<?php
$i = 5;
//Проверяет $i на соответствие $i = 5; Если условие верно, то результат записывается в переменную $res
//ВАЖНО: результат должен быть найден в любом случае, т.е. если $i = 7, а в match это не описано, то будет Fatal error
//если ни одна проверка не подошла, можно вывести в конце default => "Не найдено пятерки"
$res = match($i){
    1 => "Один",
    2 => "Два",
    3 => "Три",
    4 => "Четыре",
    5 => "пять",
};
echo $res;
echo "<br><br>";

$a = 2;
$res2 = match($a){
    1, 2, 2 => "Меньше 4",//Проверяес $a равна ли она 1,2,3 если да,0 то выводим "Меньше 4"
    4 => "Равно 4",
    default => "Все остальное"
};
echo $res2;
echo "<br><br>";
echo "<p><b>Операторы сравнения в match</b></p>";
$let = -2;
$res3 = match (true){
    $let < 18 => "Вход запрещен",
    $let >= 18 && $let < 21 => "Входи, пить запрещено",
    $let >= 21 => "Входи, пей, кури",
    default => "не стандартная ситуация, требуется доп. проверка"
};
echo $res3;
?>
</body>
</html>