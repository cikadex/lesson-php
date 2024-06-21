<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 27. Подключение файлов в PHP</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/function.require.php">Документация. Подключение файлов в PHP</a><br><br>

<?php
require_once "funcs.php";//Подключение от текущего файла index.php
echo get_table(5, 7);

print_r($data);

?>


<br><br>
<p>Запись данных в переменную из другого файла</p>
<?php
$ddt = require_once 'mass.php';
echo "<pre>";
print_r($ddt);
?>
</body>
</html>