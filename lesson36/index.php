<?php
session_start();// Стартует сессию
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 36. Сессии в PHP</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/reserved.variables.session">Документация. Сессии в PHP</a><br>
<a href="https://www.php.net/manual/ru/ref.session.php">Документация. Функции для работы с сессиями</a><br><br>

<p><b>Сессия</b> - сеанс пользователя на сайте. Предназначена для передачи данных между страницами сайта</p>
<p>Сессия представляет собой файл, который находится на сервере. В файле хранятся все данные которые доступны через <b>$_SESSION</b></p>
<p>Файл создается для конкретного клиента(браузера); Имя файла равно названию в браузере, например: t4hl5nn93l63t964r6mqvijjbh</p>
<p><b>ВАЖНО: </b> в куки ничего не пишится, пишится в файл сессии, а данные из файла доступны по сессионной куки: t4hl5nn93l63t964r6mqvijjbh</p>

<?php
$_SESSION["test"] = 123;

//счетчик
$_SESSION["count"] += 1;

echo "<pre>";
print_r($_SESSION);

//session_unset(); //Удаление ВСЕХ переменных сессии
//unset($_SESSION["test"]);// Удаляет конкретную переменную
?>

<a href="sess.php">Ссылка</a>

<p>Удалить всю сессию и удалить конкретную переменную в сессии</p>
</body>
</html>