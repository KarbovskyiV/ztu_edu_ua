<p>Додати тризначне число </p>
<form action="">
    <input type="text" name="numAdd">
    <button>Add</button>
</form>

<?php
$number = $_GET['numAdd'] ?? null;

// add check on string
if ($number) {
    $sum = 0;
    for ($i = 0, $iMax = strlen((string)$number); $i < $iMax; $i++) {
        $sum += $number[$i];
    }
    echo $sum;
} else {
    return 'string';
}

// error output text
?>
