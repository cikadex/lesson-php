<?php
//isset - проверка ну существование переменной
//empty - проверка на пустоту переменной

if (isset($_POST["agree"])) {
    echo "<p>Галочка отмечена</p>";
}else{
    echo "<p>Галочка  НЕ отмечена</p>";
}

if (empty($_POST["name"])) {
    echo "<p style='color: red'>Имя пусто</p>";
}