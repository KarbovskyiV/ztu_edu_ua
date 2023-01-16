<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Task</title>
</head>
<body>

<?php
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];
$gender = $_POST['gender'] ?? null;
$city = $_POST['city'];
$hobbies = $_POST['hobby'] ?? [];
$about = $_POST['about'];
$photo = $_FILES['file'];

$_SESSION['login'] = $login;
$_SESSION['gender'] = $gender;
$_SESSION['city'] = $city;
$_SESSION['hobby'] = $hobbies;
$_SESSION['about'] = $about;

if ($password === $password_confirmation) {
    $pass = $password;
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $userPass = 'Паролі співпадають';
    $_SESSION['password'] = $pass;
} else {
    $userPass = 'Паролі не спіпадають';
}
?>

<form action="">
    <p>Логін: <?= $login ?></p>
    <p>Пароль: <?= $userPass ?></p>
    <p>Стать: <?= $gender ?></p>
    <p>Місто: <?= $city ?></p>
    <p>Улюблені ігри: <?php
        foreach ($hobbies as $hobby) {
            echo $hobby, ' ';
        } ?>
    </p>
    <p>Про себе: <?= nl2br($about) ?></p>
    <p>Фотографія:
        <?php
        if (isset($_POST['uploadBtn'])) {
            $filepath = "images/" . $_FILES["file"]["name"];

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "<img src=" . $filepath . " height=200 width=300 />";
            } else {
                echo "Фото відсутнє";
            }
        } ?> </p>
</form>

<a href="indexx.php">Повернутись на головну сторінку</a>
</body>
</html>
