<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 10. Операторы сравнения</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.operators.php">Документация. Операторы</a><br>
<a href="https://www.php.net/manual/ru/language.operators.comparison.php">Документация. Операторы сравнения</a><br><br>
<p>Пройти урок по документации: Операторы сравнения</p><br>
<hr>

<a href="https://www.php.net/manual/ru/language.operators.increment.php">Операторы инкремента и декремента </a><br><br>

<p>$a++ - префиксный инкремент; Увеличивает $a на единицу, затем возвращает значение $a.</p>
<?php
$a = 2;
var_dump($a++);//Увидим двойку, т.к. сначала возвращается ее значение
var_dump($a);//Увидим тройку
?>

<br><br>
<p>++$a - постфиксный инкремент; Возвращает значение $a, затем увеличивает $a на единицу.</p>
<?php
$b = 2;
var_dump(++$b);//Увидим тройку, т.к.
var_dump($b);//Увидим тройку
?>

<br><br>
<p>$a-- - постфиксный декремент; Возвращает значение $a, затем уменьшает $a на единицу.</p>
<?php
$c = 2;
var_dump($c--);//Увидим двойку
var_dump($c);//Увидим единицу
?>
<br><br>
<p>--$a	- префиксный декремент; Уменьшает $a на единицу, затем возвращает значение $a.</p>
<?php
$d = 2;
var_dump(--$d);//Увидим единицу
var_dump($d);//Увидим единицу
?>
</body>
</html>