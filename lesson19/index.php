<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 19. Операторы continue и break</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.break.php">Документация. Оператор break</a><br>
<a href="https://www.php.net/manual/ru/control-structures.continue.php">Документация. Оператор continue</a><br><br>
<p>continue - сможем пропустить оставшуюся часть текущей итерации</p>
<?php
for($i = 1; $i <= 20; $i++){
    //Вывод нечетных чисел
    //Берем $i = 1 и проверяем $i % 2 == 0, если да, то пропускаем
    if($i % 2 == 0){//Если != 0 то четные
        continue;
    }
    echo "{$i}<br>";
}
var_dump(1 % 2);
?>
<br><br>
<p>break  - прерывание цикла</p>
<?php
for($i = 1; $i <= 20; $i++){
    echo "{$i}<br>";
    if($i == 14){
        break;
    }
}
?>
</body>
</html>