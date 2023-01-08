<?php

session_start();

$login = 'Admin';
$pass = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // add check on $_POST['login']
    if ($_POST['login'] === $login && $_POST['pass'] === $pass) {
        // session_start(); should be here
        $_SESSION['admin'] = $login;
        $_SESSION['pass'] = $pass;
        $_SESSION['res'] = 'Добрий день, Admin!';
    } else {
        $_SESSION['res'] = '<form action="" method="post">
    <input type="text" name="login" placeholder="Логін">
    <input type="text" name="pass" placeholder="Пароль">
    <button type="submit">Log in</button>
    </form>';
        // як сюди втикнуть виведення помилкі щоб вона не виводилась при нажиманні кнопкі вийти?
    }
    header("Location: session.php");
    die();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Task</title>
</head>
<body>

<p>1) Створіть форму авторизації з полями «Логін» та «Пароль»</p>
<p>2) Якщо був введений логін «Admin» та пароль «password», то вивести повідомлення «Добрий день, Admin!»,<br>
    інакше вивести повідомлення про невірність введення логіна або пароля
</p>
<p>3) При кожному оновленні сторінки, якщо користувач вже пройшов успішно авторизацію, повинно виводитись привітання,
    <br> а якщо користувач не пройшов авторизацію, або вийшов, то вивести форму авторизації</p>
<p>4) Створіть посилання «Вихід», при переході на яке користувач для входу повинен буде знову ввести логін та пароль.
    <br><i><u>Примітка:</u> інформацію з логіном та паролем потрібно зберігати в сесії</i>
</p>
<form action="" method="post">
    <input name="exit" type="submit" value="Вихід">
</form>
<?php
if (isset ($_POST['exit'])) {
    unset($_SESSION ['admin'], $_SESSION ['pass']);
    header("Location: session.php");
    die();
}

// check is autentificated, if no - form ...
if (isset ($_SESSION ['res'])) {
    echo '<p>', $_SESSION ['res'], '</p>';
}
?>
</body>
</html>
