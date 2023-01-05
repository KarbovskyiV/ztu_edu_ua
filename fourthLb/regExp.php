<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegExp</title>
</head>
<body>
<p>1. Створіть текстове поле, опрацюйте форму і замініть всі знайдені адреси сайтів в тексті на «тут була адреса
    сайту»<br>
    Всі знайдені адреси зберігайте в окремий масив. Виведіть отриманий текст і масив з адресами
</p>
<p>
    <i><u>Приклади сайтів:
<ul style="list-style-type:none;">
    <li>http://www.w3schools.com/php/php_ref_regex.asp</li>
    <li>https://learn.ztu.edu.ua/course/view.php?id=4750</li>
    <li>http://translate.google.com</li>
    <li>https://www.php.net/manual/ru/function.scandir.php</li>
    <li>http://www.microsoft.com/uk-ua</li>
    </i></u>
</ul>
</p>

<form action="" method="post">
    <input type="text" name="address">
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Шо тут писать???
    echo '';
} else {
    $address = $_POST['address'] ?? null;
    $pattern = "/^(https:|http:|www\.)\S*/";

    $replace = preg_replace($pattern, "«тут була адреса сайту»", (array($address)));

    $matches = [];
    $matchSite = preg_match_all($pattern, $address, $matches, PREG_PATTERN_ORDER);

    echo '<p>', $replace[0], '</p>';
    echo '<p>', $matches[0][0], '</p>';
}
?>
</body>
</html>
