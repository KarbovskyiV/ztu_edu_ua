<p> Отримайте переставлені цифри так, щоб нове число виявилося найбільшим з можливих </p>
<form action="">
    <input type="text" name="number">
    <button>Add</button>
</form>
<?php
$number = $_GET['number'] ?? null;

// if !number
if ($number) {
    $array = str_split((string)$number);


//    $tmp = array();
//    foreach ($array as $i) {
//        $tmp = array_merge($tmp, str_split((string)$i));
//    }

    rsort($array, SORT_NUMERIC);

    $maxNumber = implode('', $array);
    echo $maxNumber;
} else {
    return null;
}
?>
