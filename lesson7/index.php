<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 7. Строки</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.types.php">Документация. Типы данных</a><br><br>
<p>Управляющие последовательности в двойных кавычках</p>
<i>Перевод строки в коде!</i><b> Не путать с переносом строки <br></b>
<p>PHP_EOL - универсальный перевод строки, будет работать на всех операционных системах</p>
<?php
echo "PHP_EOL" . PHP_EOL . "Перенос";
?>
<p>\\F - экранирование обратного \</p>


</body>
</html>