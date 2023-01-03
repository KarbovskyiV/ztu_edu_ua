<p>Додати тризначне число </p>
<form action="">
    <input type="text" name="numAdd">
    <button>Add</button>
</form>

<?php
$number = $_GET['numAdd'] ?? null;

if (!is_numeric($number)) {
    echo 'Error, please enter only numbers!';
} else {
    $sum = 0;
    for ($i = 0, $iMax = strlen((string)$number); $i < $iMax; $i++) {
        $sum += $number[$i];
    }
    echo $sum;
}

?>
