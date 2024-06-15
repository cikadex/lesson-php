<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 13. Управляющие конструкции. IF-ELSE-ELSEIF</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.control-structures.php">Документация. Управляющие конструкции</a><br><br>

<?php
$light = "Желтый";
if($light == "Зеленый"){
    echo "Можно идти";
}elseif($light == "Желтый"){
    echo "Приготовься идти";
}else{
    echo "Стоп";
}
?>


</body>
</html>