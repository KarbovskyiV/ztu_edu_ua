<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Task</title>
</head>
<body>
<?php
error_reporting(512);

$rows = $_GET['rows'];
$cols = $_GET['cols'];
//$amount = $_GET['square'];

function createTable(int $rows, int $cols): void
{
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<table  border='1' align='center' width='250'>\n";

        echo "\t<tr>\n";

        for ($td = 1; $td <= $cols; $td++) {
            echo "\t\t<td width='25'>" . '&ensp;' . "</td>\n";
        }

        echo "\t</tr>\n";
    }

    echo "</table>";
}

//function randSquares(int $amount): void
//{
//    $a = rand(0, $amount);
//    $b = rand(0, $amount);
//
//    for ($i = 1; $i <= 30; $i++) {
//        echo "<div style=\"width: $a; height: $b; margin:$a; padding: $b; top:$a; border: 4px solid dimgrey; background-color: red\"></div>";
//    }
//}
createTable($rows, $cols);
//randSquares($squares);
?>
<p>Enter the table size</p>
<form action="" method="get">
    <input type="number" name="rows" placeholder="rows"/>
    x <input type="number" name="cols" placeholder="cols"/>
    <input type="submit" value="create table">
</form>

<p>Enter amount squares</p>
<form action="" method="get">
    <input type="number" name="square" placeholder="square"/>
    <input type="submit" value="create squares">
</form>

</body>
</html>
