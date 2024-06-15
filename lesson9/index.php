<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 9. Оператор присваивания</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.operators.php">Документация. Операторы</a><br>
<a href="https://www.php.net/manual/ru/language.operators.assignment.php">Документация. Операторы присваивания</a><br><br>

<p>Знак = это оператор присваивания</p><br>
<p>Комбинированные операторы:</p>
<p>$a = 2;</p>
<p>$a += 5; данная запись равнозначна $a = $a + 5</p>

<?php
$a = 5;
echo $a += 10;
echo "<br>";

$b = "Труд ";
echo $b .= "Май";

echo "<br>";

$d = 2;
$d += 3 * 5;
?>


</body>
</html>