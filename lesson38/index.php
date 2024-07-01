<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 38. Куки в PHP</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/reserved.variables.cookies.php">Документация. Куки в PHP</a><br>
<a href="https://www.php.net/manual/ru/function.setcookie.php">Документация. setcookie()</a><br><br>
<p><b>Cookies</b> хранятся на стороне клиента</p>
<p><b>ВАЖНО:</b> объявляются до вывода</p><br><br>

<p>setcookie(name, value, time)</p>
<p><b>name</b> - имя куки, по названию получаем доступ к ее значению</p>
<p><b>value</b> - значение куки</p>
<p><b>time</b> - срок действия куки; задается в секундах. Пример: выражение time() + 60 * 60 * 24 * 30 установит срок
    действия cookie, который закончится через 30 дней</p>
<p><b>path </b> - для какой директория будет действовоть кука. Если не указано, то будет действовать для директории где
    она устанавливается. / - для всего сайта</p>
<p>Удаление куки происходит путем вычитание от текущего времени 3600. По идее можно отнять даже секунду; <b>ВАЖНО:</b>
    кука должна удаляться с теми же параметрами, что и выставлялась</p>


<?php
//setcookie("test1", "TEST_1",  time() + 3600, "/");
//setcookie("test2", "TEST_2", time() + 100, "/");

//Удаление куки
//setcookie("test2", "TEST_2", time() - 100, "/");

//счетчик посещений

setcookie("count", 1, time() + 60 * 60 * 24 * 30, "/");

setcookie("count", $_COOKIE["count"] + 1, time() + 60 * 60 * 24 * 30, "/");

function () {

};

asd();


?>
</body>
</html>