<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 17. Цикл for</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.for.php">Документация. Цикл for</a><br><br>

<p>Увеличивается счетчик</p>
<?php
for($i = 1; $i <= 10; $i++){
    echo "{$i}<br>";
}
?>
<p>Уменьшается счетчик</p>
<?php
for ($i = 10; $i >= 1; $i--){
    echo "{$i}<br>";
}
?>
</body>
</html>