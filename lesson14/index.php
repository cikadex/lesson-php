<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 14. Тернарный оператор</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/language.operators.comparison.php">Документация. Тернарный оператор</a><br><br>

<?php
$light = "green";
if($light == "green"){
    echo "Можно идти";
}else{
    echo "СТОП";
}
echo "<br>";
//Знак вопроса говорит: if $light == "green" то выведи "Можно идти", двоеточие это else, т.е. иначе выведи "СТОП"
echo $light == "green" ? "Можно идти" : "СТОП";
?>
<br><br>
<p><b>Тернарный оператор2</b></p>
<?php
$user = "";

//Если есть пользователь в переменной, то выведи переменную  $user, иначе выведи: Нет пользователя
echo $user ?: "Нет пользователя";
?>

</body>
</html>