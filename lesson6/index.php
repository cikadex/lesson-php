<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 6. Типы данных в PHP</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.types.php">Документация. Типы данных</a><br><br>
<p>boll - логический тип данных, может иметь два значения: <b>true</b> и <b>false</b></p>
<?php
$bool = true;
var_dump($bool);
?>
<br><br>
<p>Приведение к типу данных булев значений:</p>
<i>Ноль и пустая строка это <b>false</b>, Число больше нуля и не пустая строка это <b>true</b></i><br>
<?php
var_dump((bool)0, (bool)"");
var_dump((bool)122, (bool)"321");
?>
<hr><br>

<p>int - целое число</p>
<?php
$int1 = 0;
$int2 = 1;
var_dump($int1, $int2);

?>
<p>Преобразование числовой строки в integer</p>
<?php
var_dump((int)"10");//Преобразование числовой строки в integer
var_dump((int)"17Труд");//Префиксная числовая строка
var_dump((int)"Май2020");//Префиксная числовая строка
?>
<hr><br>
<p>float - Числа с плавающей точкой или числа с плавающей запятой</p>
<?php
$float = 3.1415926;
var_dump($float);
var_dump(0.1 + 0.2);
?>
<p>Чтобы избежать проблемы округления можно использовать преобразования в целое число</p>
<b>(0.1 * 10 + 0.2 * 10) / 10</b><br>
<?php
var_dump((0.1 * 10 + 0.2 * 10) / 10);
?>



</body>
</html>