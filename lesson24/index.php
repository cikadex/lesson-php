<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 24. Пользовательские функции. Часть 1</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.functions.php">Документация. Пользовательские функции.</a><br><br>
<p><b>Функции</b> - это некий блок кода который можно переиспользовать</p>
<p>Не важно где описана функции, в начале или в конце, вызов функции будет работать в любом месте</p><br><br>

<?php
function test() {
    //В функции мы только описываем код, но он выполняется только в том случае, если мы вызовем его
    echo "Привет Мир";
}
test();//Вызов функции
?>
<br><br>

<p>В скобках функции указываются аргументы функции; можно указывать значения по умолчанию: $name = "Сергей"</p>
<?php
function hello($name) {//Аргумент функции
    echo "Привет {$name}";
}
hello("Анна");
?>
<br><br>
<P>Аргументов у функции может быть несколько</P>
<?php
function sum($a, $b, $c) {
    echo $a + $b + $c;
}
sum(1, 2, 3);
?>
<br><br>
<p>Все переменный которые находятся в глобальной области видимости в функции не видны</p>

</body>
</html>