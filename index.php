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

    .tab75 {
        margin-left: 75px;
    }

    .tab100 {
        margin-left: 100px;
    }

    .tabminus10 {
        margin-left: -10px;
    }

    .tabminus80 {
        margin-left: -80px;
    }

    .tabminus120 {
        margin-left: -120px;
    }
</style>
<p>
    Полину в мріях в купель океану,<br>
    <span class="tab100"></span>Відчую <b>шовковистість</b> глибини,<br><br>
    Чарівні мушлі з дна собі дістану,<br>
    <span class="tabminus120"></span>Щоб <b><em>взимку</em></b><br>
    <span class="tabminus80"><u>тішили</u><br>
<span class="tabminus10">мене<br>
<span class="tab75">вони…<br>
</p>

<p>Перевод гривень в долари</p>
<form action="">
    <input type="text" name="hryvnia">
    <button>Convert</button>
</form>
<?php
$hryvnia = $_GET['hryvnia'] ?? null;
$dollar = 37.0;

echo $hryvnia ? $hryvnia . ' грн. можна обміняти на ' . round($hryvnia / $dollar, 2) . ' долар' : null;
?>

<p><a href="numAdd.php">Додати тризначне число</a></p>

<p> Отримайте число в зворотному порядку цифр даного тризначного натурального числа </p>
<form action="">
    <input type="text" name="num">
    <button>Add</button>
</form>
<?php
$num = $_GET['num'] ?? null;

echo $num ? strrev($num) : null;
?>

<p> Отримайте переставлені цифри так, щоб нове число виявилося найбільшим з можливих </p>
<form action="">
    <input type="text" name="number">
    <button>Add</button>
</form>
<?php
$number = $_GET['number'] ?? null;

$array = str_split($number);

$tmp = array();
foreach ($array as $i) {
    $tmp = array_merge($tmp, str_split($i, 1));
}

rsort($tmp, SORT_NUMERIC);

$maxNumber = implode('', $tmp);
echo $maxNumber;
?>

<br><br>
<a href="kubik2.php">Кубик для двох</a>
<br><br>
<form action="">
    <input type="submit" name="kubik" value="Кинути кубик">
</form>
<br>
<?php
$kubik = $_GET['kubik'] ?? null;
$rand = random_int(1, 6);

if ($kubik) {
    echo 'Кидаємо кубик...', '<br>';
    sleep(1);
    echo "Випало $rand";
} else {
    return null;
}
?>
<br>
</body>
</html>
