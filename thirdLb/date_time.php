<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date and Time</title>
</head>
<body>

<?php
$nowDay = $_POST['day'] ?? date('d');
$nowMonth = $_POST['month'] ?? date('m');
$nowYear = $_POST['year'] ?? date('Y');

?>
<p>
    1) Створіть форму з трьома випадаючими списками: число, місяць, рік.
    Число від 1 до 31, Місяць від Січня до Грудня і рік від 1970 до поточного.
    По замовчуванню повинна бути обрана поточна дата. А якщо користувач вже вводив дані (тобто відправляв форму),
    то повинні стояти ті дані, які він ввів.
</p>
<p>Приміть дані з форми та перевірте їх на коректність (щоб не було, наприклад, 30 лютого).
    Якщо дані коректні, то виведіть дату в форматі ММ-ДД-РРРР, інакше повідомлення про помилку
</p>
<form action="" method="post">
    <select name="day">

        <?php
        for ($day = 1; $day <= 31; $day++) : ?>
            <?php

            if ($nowDay == $day) {
                $select = 'selected';
            } else {
                $select = '';
            }
            ?>
            <option <?= $select ?> value="<?= $day ?>"><?= $day ?></option>
        <?php
        endfor; ?>
    </select>

    <select name="month">
        <?php
        $months = [
            'Січень',
            'Лютий',
            'Березень',
            'Квітень',
            'Травень',
            'Червень',
            'Липень',
            'Серпень',
            'Вересень',
            'Жовтень',
            'Листопад',
            'Грудень',
        ];
        ?>
        <?php
        for ($month = 1; $month <= 12; $month++) : ?>
            <?php

            if ($nowMonth == $month) {
                $select = 'selected';
            } else {
                $select = '';
            }
            ?>
            <option <?= $select ?> value="<?= $month ?>"><?= $months[$month - 1] ?></option>
        <?php
        endfor; ?>
    </select>

    <select name="year">
        <?php
        for ($year = 1970; $year <= date('Y'); $year++) : ?>
            <?php

            if ($nowYear == $year) {
                $select = 'selected';
            } else {
                $select = '';
            }
            ?>
            <option <?= $select ?> value="<?= $year ?>"><?= $year ?></option>
        <?php
        endfor; ?>
    </select>
    <button type="submit">Send</button>
</form>

<?php
if (!checkdate($nowMonth, $nowDay, $nowYear)) {
    echo '<p>' . 'Введіть валідну дату' . '</p>';
} else {
    echo '<p>' . $nowMonth . '-' . $nowDay . '-' . $nowYear . '</p>';
}

?>
</body>
</html>
