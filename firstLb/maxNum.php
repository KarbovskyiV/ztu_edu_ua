<p> Отримайте переставлені цифри так, щоб нове число виявилося найбільшим з можливих </p>
<form action="">
    <input type="text" name="number">
    <button>Add</button>
</form>
<?php
$number = $_GET['number'] ?? null;

if ($number) {
    $array = str_split($_GET['number']);

    $tmp = array();
    foreach ($array as $i) {
        $tmp = array_merge($tmp, str_split($i, 1));
    }

    rsort($tmp, SORT_NUMERIC);

    $maxNumber = implode('', $tmp);
    echo $maxNumber;
} else {
    return null;
}
?>
