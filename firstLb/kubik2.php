<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<style>
    * {
        text-align: center;
    }
</style>
<form action="">
    <input type="submit" name="kubik2" value="Кинути кубик для 2-ох">
</form>
<br>
<?php
$kubik = $_GET['kubik2'] ?? null;
$randHuman = random_int(1, 6);
$randHuman2 = random_int(1, 6);
$randRobot = random_int(1, 6);
$randRobot2 = random_int(1, 6);
$kubikHuman = $randHuman + $randHuman2;
$kubikRobot = $randRobot + $randRobot2;

switch ($kubik) {
    case  ($randHuman === $randHuman2) && ($randRobot === $randRobot2):
        echo "<p> Нічия, велика удача </p>";
        echo "У Івана випало $randHuman і $randHuman2 ", '<br>';
        echo "У робота випало $randRobot і $randRobot2";
        break;
    case $kubikHuman === $kubikRobot :
        echo "<p> Нічия </p>";
        echo "У Івана випало $randHuman і $randHuman2 ", '<br>';
        echo "У робота випало $randRobot і $randRobot2";
        break;
    case $kubikHuman > $kubikRobot :
        echo "<p> Переміг Іван </p>";
        echo "У Івана випало $randHuman і $randHuman2", '<br>';
        echo "У робота випало $randRobot і $randRobot2";
        break;
    case $kubikHuman < $kubikRobot :
        echo "<p> Переміг робот </p>";
        echo "У Івана випало $randHuman і $randHuman2", '<br>';
        echo "У робота випало $randRobot і $randRobot2";

    default :
}
?>
