<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog</title>
</head>
<body>

<p>
<ul>
    <li>Створіть форму з наступними полями: <b>Логін</b> та <b>Пароль</b></li>
    <li>Опрацюйте форму та створіть папку з ім’ям логіна, якщо такої папки ще немає. А якщо є, то вивести повідомлення
        про помилку
    </li>
    <li>Всередині створеної папки створіть підпапки video, music, photo, а також декілька файлів всередині цих папок.
    </li>
    <li>Створіть окрему сторінку delete.php з полями <b>Логін</b> та <b>Пароль</b></li>
    <li>
        Якщо ім’я логіна співпадає з ім’ям створеної папки, що була створена з попередньої сторінки, то вилучити цю
        папку з усім вмістом
    </li>
</ul>
</p>

<form action="" method="post">
    <input type="text" name="login" placeholder="Логін">
    <input type="text" name="password" placeholder="Пароль">
    <button type="submit">Send</button>
</form>

<?php
require_once 'delete.php';

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (mkdir($login) && is_dir($login)) {
        mkdir($login . '/video');
        mkdir($login . '/music');
        mkdir($login . '/photo');
        echo '<p>', 'Каталог сторено', '</p>';
    } else {
        // як убрать ворнінг я хз -_-
        echo '<p>', 'Каталог с таким логіном вже існує!', '</p>';
        deleteAll($login);
    }
}

?>
</body>
</html>
