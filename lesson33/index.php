<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 33. Методы GET и POST</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/reserved.variables.php">Документация. Методы GET и POST</a><br><br>
<form action="action.php" method="post">
    <input type="text" value="Денис" name="name"><br>
    <input type="email" value="fds@fd.ru" name="email"><br>
    <textarea name="message" id="" cols="30" rows="10">Текст статьи</textarea><br>
    <p><input type="checkbox" name="agree"> Отметить</p><br><br>
    <input type="submit" value="ОТПРАВИТЬ">
</form>

<p>Передать GET параметры вручную в адресной строке</p>
<p>Проверить существует ли переменная и проверить на пустоту переменную</p>
<p><b>ВАЖНО:</b>имя можно также передать в виде массива name="data[]"</p>

</body>
</html>