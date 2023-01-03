<p> Отримайте переставлені цифри так, щоб нове число виявилося найбільшим з можливих </p>
<form action="">
    <input type="text" name="number">
    <button>Add</button>
</form>
<?php
$number = $_GET['number'] ?? null;

if (!$number) {
    return null;
} else {
    $array = str_split((string)$number);

    rsort($array, SORT_NUMERIC);

    $maxNumber = implode('', $array);
    echo $maxNumber;
}
?>
