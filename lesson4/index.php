<?php
error_reporting(-1); // 0 - откл всех ошибок, -1 вкл всех ошибок
$title = "Урок 4";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?=$title?></title>
</head>

<body>
<a href="https://www.php.net/manual/ru/">Документация PHP</a>
<br><br>

<p>$title = 'Урок 4'; - переменная <b>$title</b> с содержимым Урок 4</p>
<p>Переменная может начинаться только с буквы или символа подчеркивания ( _ )</p>
<br>
<p>Переменные состоящие из нескольких слов пишутся через ( _ ) $winnie_the_pooh</p><br>

<?php
$winnie_the_pooh = "Цитата: \"Экранирование кавычек\"";
echo $winnie_the_pooh;
?>
<br><br>
<p>В двойных кавычках можно выводить переменные</p>

<br><br>
<p>Явное указание переменной в строке: {$var}</p>

<br><br>
<p>Переменые чувствительны к регистру: $var и $Var две разные переменные</p>

<?php
$var = 12;
$Var = 13;
echo "<pre>";
var_dump($var, $Var);
echo "</pre>";
?>

</body>
</html>