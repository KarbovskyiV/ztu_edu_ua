<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>
<?php

// first task
if (!isset($_GET['text'], $_GET['search'], $_GET['replace'])) {
    $result = null;
} else {
    $text = $_GET['text'];
    $search = $_GET['search'];
    $replace = $_GET['replace'];

    $result = str_replace($search, $replace, $text);
}

// second task
if (!isset($_GET['city'])) {
    $sorted = null;
} else {
    if (!is_numeric($_GET['city'])) {
        $city = $_GET['city'];

        $array = explode(' ', $city);
        asort($array);
        $sorted = implode(", ", $array);
    } else {
        $sorted = 'Enter only city names';
    }
}

// third task
$text = 'D: \ WebServers \ home \ testsite \ www \ myfile.txt';
$path = pathinfo($text);
$filename = $path['filename'];

// fourth task
$dateFrom = '20-02-2015';
$dateTo = '10-01-2015';

$datetimeFrom = DateTime::createFromFormat('d-m-Y', $dateFrom);
$datetimeTo = DateTime::createFromFormat('d-m-Y', $dateTo);
?>
<p>1) Створіть 4 текстових поля з мітками <i>Текст, Знайти, Замінити і Результат</i>.
    Виконати можливість заміни символів і вивести результат.
</p>
<form action="">
    <p><input name="text" type="text" placeholder="Текст"></p>
    <p><input name="search" type="search" placeholder="Знайти"></p>
    <p><input name="replace" type="text" placeholder="Замінити"></p>
    <button>Replace</button>
    <p><input type="text" placeholder="Результат" value="<?= $result ?>"></p>
</form>

<p>2) Користувач вводить назви міст через пробіл. Переставте назви так, щоб назви були впорядковані за алфавітом.</p>

<form action="">
    <p><input name="city" type="text" placeholder="Назви міст через пробіл"></p>
    <button>Sort</button>
    <p><input type="text" placeholder="Результат" value="<?= $sorted ?>"></p>
</form>

<p>3) Дан рядок, що містить повне ім'я файлу, наприклад:
<p><b>D: \ WebServers \ home \ testsite \ www \ myfile.txt</b></p>
Виділіть з цього рядка ім'я файлу без розширення
</p>

<?= $filename ?>

<p>4) У двох рядках містяться дати виду День-Місяць-Рік (наприклад, 10-02-2015). Визначте кількість днів між датами.
<p><?= $datetimeFrom->diff($datetimeTo)->format('%a день(днів)') ?></p>
</body>
</html>
