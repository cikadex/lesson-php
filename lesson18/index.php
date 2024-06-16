<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 18. Оператор switch</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.switch.php">Документация. Оператор switch</a><br><br>
<?php
$i = 5;
if($i == 1){
    echo 1;
}elseif($i == 2){
    echo 2;
}elseif($i == 3){
    echo 3;
}elseif($i == 4){
    echo 4;
}elseif($i == 5){
    echo 5;
}
echo "<br>";
switch($i){
    //В case сравниваем каждый параметр с тем что пришло в switch($i)
    case 1:echo "Один";break;
    case 2:echo "Два";break;
    case 3:echo "Три";break;
    case 4:echo "Четыре";break;
    case 5:echo "Пять";break;
}
?>

</body>
</html>