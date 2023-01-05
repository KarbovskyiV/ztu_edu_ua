<?php

if (isset($_GET['font'])) {
    $font = $_GET['font'];
    setcookie('font', $font);
    header('Location: cookie.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Cookie</title>
</head>
<body>

<p>
    Створіть на сторінці 3 посилання: «Великий шрифт», «Середній шрифт», «Маленький шрифт»<br>
    В залежності від того, на яке посилання натисне користувач, ви повинні встановити певний розмір шрифту,
    при цьому він повинен зберігатися і при переході на інші сторінки поточного сайту
</p>

<div class="menu">
    <div class="large">
        <a href="cookie.php?font=large">«Великий шрифт»</a>
    </div>

    <div class="medium">
        <p><a href="cookie.php?font=medium">«Середній шрифт»</a></p>
    </div>

    <div class="small">
        <p><a href="cookie.php?font=small">«Маленький шрифт»</a></p>
    </div>
</div>

<p><a href="test_font.php" target="_blank">test font</a></p>
</body>
</html>
