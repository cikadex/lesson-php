<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 15. Цикл while</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.while.php">Документация. Цикл while</a><br><br>

<p>Цикл while самый простой цикл и он выполняется пока есть условие(пока условие ИСТИНА)</p>
<?php
$i = 1;
while($i < 6) {//Проверяет $i на истину, если истина выполняем, если ложь останавливаем цикл
    echo "{$i}<br>";
    $i++;
}
?>

<hr><br>
<table border="1" width="200px">
    <?php
    $tr = 1;
    while($tr <= 10) {//Печатаем строки в кол-ве 10 строк
        echo "<tr>";
        $td = 1;
        while ($td <= 20){//Счетчик ячеек внутри строки
            echo "<td>{$td}</td>";
            $td++;
        }
        echo "</tr>";
        $tr++;//Увеличиваем строки
    }
    ?>
</table>
</body>
</html>