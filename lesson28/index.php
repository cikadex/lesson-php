<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Урок 28. Альтернативный синтаксис управляющих структур</title>
</head>

<body>
<a href="https://www.php.net/manual/ru/control-structures.alternative-syntax.php">Документация. Альтернативный синтаксис управляющих структур</a><br><br>

<?php
$nums = [1, 2, 3, 4, 5];
?>

<div class="container">
    <?php foreach ($nums as $num) : ?>
    <p><?=$num?></p>
    <?php endforeach;?>
</div>
</body>
</html>