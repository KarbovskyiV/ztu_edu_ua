<?php

declare(strict_types=1);
include 'Date.php';

$date = new Date('2025-12-31');

//echo $date->getMonth(); // will display '12'
//echo $date->getDay();   // will display '31'
//
//echo $date->getWeekDay();     // will display '3'
//echo $date->getWeekDay('ru'); // will display 'среда'
//echo $date->getWeekDay('en'); // will display 'wednesday'
//
//echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
//echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'
//
//echo (new Date('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'
