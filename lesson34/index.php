<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 34. Домашнее задание</title>
</head>

<body>

<?php if(!isset($_POST["btn"])):?>
    <form action="" method="post">
        <input type="text" name="name" value="Denis"><br>
        <input type="email" name="email" value="asd@fds.ru"><br>
        <input type="submit" value="ОТПРАВИТЬ" name="btn">
    </form>
<?php endif;?>

<?php
if (isset($_POST["btn"]) && empty($_POST["name"])){
    echo "Вы не ввели имя";
}elseif ($_POST["btn"] && empty($_POST["email"])){
    echo "Вы не ввели email";
}


if(isset($_POST["btn"])) {
    echo $_POST["name"]." ".$_POST["email"];
}
?>



</body>
</html>