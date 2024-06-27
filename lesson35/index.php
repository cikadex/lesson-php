<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 35. Загрузка файлов в PHP</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/reserved.variables.files.php">Документация. Загрузка файлов в PHP</a><br>
<a href="https://www.php.net/manual/ru/features.file-upload.post-method.php">Документация. Загрузка файлов методом POST</a><br>
<a href="https://www.php.net/manual/ru/features.file-upload.errors.php">Документация. Коды ошибок при загрузки файла</a><br><br>

<p>Загрузка файлов осуществляется через метод: <b>POST</b></p>
<p>При загрузке файлов у формы должен быть установлен: <b>enctype="multipart/form-data"</b></p><br><br>

<p>Проверить специальной функцией был ли загружен файл</p><br><br>
<pre>
    [name] => kandinsky.png    <b>Хранится оригинальное имя файла</b>
    [full_path] => kandinsky.png
    [type] => image/png         <b>MIME-тип файла. НЕ РАСШИРЕНИЕ!!!</b>
    [tmp_name] => C:\Users\aspdk\AppData\Local\Temp\phpFDD0.tmp   <b>Временное имя файла</b>
    [error] => 0                <b>Тип ошибки: 0 - ошибок нет;</b>
    [size] => 1550283           <b>Размер файла в байтах </b>
</pre>

<form action="" method="post" enctype="multipart/form-data" style="border: 1px solid black">
    <input type="file" name="file"><br><br>
    <input type="submit" value="ЗАГРУЗИТЬ">
</form>
<br>

<?php

if (!empty($_FILES)) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/{$_FILES["file"]["name"]}"); //1парам. - откуда переносим файл; 2парам. - куда перемещаем файл; "upload" - папка и $_FILES["name"]["name"] - имя файла (можэем указать свое)
}
?>
<hr>

<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
</body>
</html>