<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 16. Домашнее задание</title>
</head>

<body>
<?php
$i = 2;
while($i <= 9){
    $a = 2;
    while($a <= 9){
        echo "$i * $a" . "<br>";
        $a++;
    }
    $i++;
    echo "<hr>";
}
?>
</body>
</html>