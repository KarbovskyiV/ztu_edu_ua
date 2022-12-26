<?php

$arr = [
    'apple',
    'apple',
    'orange',
    'pear',
    'kiwi',
    'banana',
    'pear',
    'kiwi',
    'kiwi'
];
$arrUnique = array_unique(array_diff_assoc($arr, array_unique($arr)));

//var_dump($arrUnique);
echo '<br>';

//
$letters = [
    'а',
    'б',
    'в',
    'г',
    'ґ',
    'д',
    'у',
    'є',
    'ж',
    'з',
    'и',
    'і',
    'ї',
    'й',
    'к',
    'л',
    'м',
    'н',
    'о',
    'п',
    'р',
    'с',
    'т',
    'у',
    'ф',
    'ч',
    'ц',
    'ч',
    'ш',
    'щ',
    'ь',
    'ю',
    'я',
];

$lengthRandomWord = 6;

for ($i = 1; $i <= $lengthRandomWord; $i++) {
    $random = array_rand($letters);
    $randomText = $letters[$random];
    $letter[] = $randomText;
}

$name = implode("", $letter);
echo "Ім'я: $name";
echo '<br>';

//

function createArray($min = 10, $max = 20): array
{
    return array_map(
        function () use ($min, $max) {
            return rand($min, $max);
        },
        array_pad([], rand(3, 7), 0)
    );
}

//var_dump(createArray());

$array1 = createArray();
$array2 = createArray();

function mergeUniqueSortArray($arr1, $arr2): void
{
    $merge = array_merge($arr1, $arr2);
    $uniqueArray = array_unique($merge);
    sort($uniqueArray);
    foreach ($uniqueArray as $item) {
        echo $item, ', ';
    }
}

//mergeUniqueSortArray($array1, $array2);
