<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 25. Пользовательские функции. Часть 2</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.functions.php">Документация. Пользовательские функции.</a><br><br>

<p>Если нам не известно сколько аргументов будет у функции, то перед переменной ставим ...$nums</p>
<p>Все данные будут в виде массива</p>
<?php
function sum(...$nums) {//все данные будут в массиве
    print_r($nums);
}
echo "<pre>";
sum(1,2,3,4,5);//все данные будут в массиве
echo "</pre>";
?>
<br><br>
<p>Суммирование массива</p>
<?php
function summ(...$nums) {
    $ssde = 0;
    foreach ($nums as $num) {
        $ssde += $num;
    }
    echo $ssde;
}
summ(1,2,3,4,5);
?>
<br><br>
<p>Подсказки типов аргументов функции</p>
<?php
function summ3(int $a, int $b, int $c) {
    echo $a + $b + $c;
}
summ3(1, 2, 3);
?>


<br><br>
<p>Возвращение функции:</p>
<p>Что значит возвращать - это значит, что функция вернет некий результат, который мы можем использовать</p>
<p>Если мы хотим в дальнейшем использовать результат выполнения функции, то мы должны его возвращать</p>
<?php
function summ4( $a, $b,  $c) : int {//Указываем какой тип данных должна возвращать функция
    return $a + $b + $c;
}
$result = summ4(1,2,3);
echo $result;
?>
</body>
</html>