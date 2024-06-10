<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 5</title>
</head>

<body>
<p>Значение константы изменить нельзя. В константах как правило хранятся настройки проекта</p><br>
<p>Есть два вида констант: const и define()</p>
<p>difine() - мы можем определить где угодно</p>
<p>const - должны быть объявлены в самой верней области видимости; Нельзя объявлять внутри функций, циклов, условий</p>
<?php
define("CONST_1", "value_1");
echo CONST_1;

const CONST_2 = "value_2";
echo CONST_2;

?>

</body>
</html>