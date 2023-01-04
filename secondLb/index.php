<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <title>Second Lb</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $x = $_POST['x'];
    $y = $_POST['y'];

    $pow = $x ** $y;
    $factorial = array_product(range(1, $x));
    $sinX = sin($x);
    $cosX = cos($x);
    $tgX = tan($x);
    $sum = $x + $y;
    $subtract = $x - $y;
    $multiply = $x * $y;
    $divide = $x / $y;
    $avg = $sum / 2;
} else {
    $x = null;
    $y = null;
    $pow = null;
    $factorial = null;
    $tgX = null;
    $sinX = null;
    $cosX = null;
    $sum = null;
    $subtract = null;
    $multiply = null;
    $divide = null;
    $avg = null;
}
?>

<p>1) Створіть за допомогою власних функцій таблицю обчислень. Дані вводьте за допомогою форми, де sin, cos, tg
    – за допомогою вбудованих функцій, my_tg(x), xy, x!, average(x,y) – власні функції.
</p>

<table class="table table-bordered">
    <thead>
    <tr class="bg-warning">
        <th scope="col">x<sup>y</sup></th>
        <th scope="col">x!</th>
        <th scope="col">my_tg(x)</th>
        <th scope="col">sin(x)</th>
        <th scope="col">cos(x)</th>
        <th scope="col">tg(x)</th>
        <th scope="col">x+y</th>
        <th scope="col">x-y</th>
        <th scope="col">x*y</th>
        <th scope="col">x/y</th>
        <th scope="col">average(x,y)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $pow ?? null ?></td>
        <td><?= $factorial ?></td>
        <td><?= $tgX ?></td>
        <td><?= $sinX ?></td>
        <td><?= $cosX ?></td>
        <td><?= $tgX ?></td>
        <td><?= $sum ?></td>
        <td><?= $subtract ?></td>
        <td><?= $multiply ?></td>
        <td><?= $divide ?></td>
        <td><?= $avg ?></td>
    </tr>
    </tbody>
</table>

<form action="" method="post">
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <p>x <input type="number" name="x"/></p>
            </div>
            <div class="col">
                <p>y <input type="number" name="y"/></p>
            </div>
            <div class="col">
                <input type="submit" value="=">
            </div>
        </div>
    </div>
</form>

<div class="container">
    <p class="m-3"><a href="secondTask.php">Second Task</a></p>
    <p class="m-3">
        Написати функцію, яка приймає кількість рядків та стовпців таблиці, і виводить на екран таблицю,
        що складається з n x n комірок різного кольору.
    </p>
    <p class="m-3">Написати функцію, яка приймає число n - кількість квадратів. Функція має вивести на чорному тлі n
        червоних квадратів випадкового розміру в випадковій позиції в браузері.
    </p>
</div>

<div class="container">
    <p class="m-3"><a href="thirdTask.php">Third Task</a></p>
    <p class="m-3">
        Написати функцію, яка приймає масив. Вивести елементи масиву, що повторюються.
    </p>
    <p class="m-3">
        Написати функцію-генератор імен. Функція приймає масив з складів або символів.
        Функція має повертати згенероване ім’я кішки, собаки, хом’ячка або іншої тваринки
    </p>
</div>
</body>
</html>
