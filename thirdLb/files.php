<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Files</title>
</head>
<body>

<p>1) Створіть форму з полями <b>Ім’я</b> та <b>Коментар</b>.</p>
<ul>
    <li>Опрацюйте форму, записавши введені дані в файл з коментарями.</li>
    <li>На цій же сторінці виведіть всі поточні коментарі в таблицю (1 коментар – 1 рядок).</li>
    <li><i><u>Примітка1:</u> ви повинні подумати, в якому вигляді треба зберігати коментарі в файл, та чим розділяти
            самі коментарі, щоб потім було легко розібрати цей файл і вивести необхідну інформацію на сторінку.</i>
    </li>
    <li><i><u>Примітка2:</u> Можете використати функції <b>fgets()</b> та <b>fseek()</b></i></li>
</ul>
<?php

$name = $_POST['name'] ?? null;
$comment = $_POST['comment'] ?? null;

if ($name && $comment) {
    $file = fopen("comments.txt", "a+");

    fwrite($file, "\n $name: $comment \n");
    fclose($file);

    header('Location: files.php');
    exit;
} else {
    $name = null;
    $comment = null;
}

?>
<form action="" method="post">
    <input type="text" name="name" placeholder="Ім'я">
    <input type="text" name="comment" placeholder="Коментар" required>
    <button type="submit">Send</button>
</form>

<table>
    <tr>
        <td>
            <?php
            $fd = fopen("comments.txt", 'r') or die("Error, no such file");
            while (!feof($fd)) {
                $str = fgets($fd);
                echo $str, '<br>';
            }
            fclose($fd);
            ?>
        </td>
    </tr>
</table>
<hr>
<p>2) Дано два файли зі словами, розділеними пробілами.</p>
Створити новий файл, який містить:
<ul>
    <li type="a"> рядки, які зустрічаються тільки в першому файлі;</li>
    <li type="a"> рядки, які зустрічаються в обох файлах;</li>
    <li type="a"> рядки, які зустрічаються в кожному файлі більше двох разів.</li>
</ul>
<hr>

<p>3) Дан файл зі словами. Впорядкувати слова за алфавітом.</p>

<?php
$words = file('words.txt', FILE_SKIP_EMPTY_LINES);

$array = explode(' ', $words[0]);
asort($array);
$sorted = implode(", ", $array);

echo $sorted;
?>
</body>
</html>
