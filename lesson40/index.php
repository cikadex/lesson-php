<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 40. Функции файловой системы</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/ref.filesystem.php">Документация. Функции файловой системы</a><br><br>

<p>Скопировать файл</p>
<?php
copy("file.txt", "folder/file-copy.txt");//1пар. что копируем, 2пар. куда копируем
?>

<p>Проверить наличие существования файла; используется например перед удалением, перемещением и т.д. </p>
<?php
if (file_exists("folder/file-copy.txt")) {
    echo "Файл есть";
}else {
    echo "Файла НЕТ";
}
?>


<br><br><hr>
<p>Прочитать содержимое файла в строку</p>
<?php
echo file_get_contents("folder/file-copy.txt");
?>


<br><br><hr>
<p>Запись в файл; перезаписать и дописать в файл используя 3 параметр</p>
<?php
//Если файла нет, то функция создаст файл
$file = file_get_contents("folder/file-copy.txt");
//file_put_contents("folder/reg.txt", $file, FILE_APPEND);//1пар. - куда пишем, 2пар. данные которые мы записываем, 3пар. флаги

?>

<br><br><hr>
<p>Прочитать содержимое файла и записать его в массив</p>
<p><b>FILE_IGNORE_NEW_LINES</b> - Пропускать новую строку в конце каждого элемента массива</p>
<p><b>FILE_SKIP_EMPTY_LINES</b> - Пропускать пустые строки; Если в файле пустые строки то они будут пропущены</p>
<?php
$fmass = file("folder/file-copy.txt");
foreach ($fmass as $v) {
    $ffgg[] = $v . "\n";
}


//file_put_contents("folder/reg.txt", $ffgg, FILE_APPEND);

$fas = file("folder/reg.txt", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
echo "<pre>";
print_r($fas);
echo "</pre>";
?>


</body>
</html>