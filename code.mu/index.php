<?php

declare(strict_types=1);
include 'Date.php';

$date = new Date('2025-12-31');

var_dump($date);
//echo $date->getYear();  // will display '2025'
//echo $date->getMonth(); // will display '12'
//echo $date->getDay();   // will display '31'
//
//echo $date->getWeekDay();     // will display '3'
//echo $date->getWeekDay('ua'); // will display 'середа'
//echo $date->getWeekDay('en'); // will display 'wednesday'
//
//echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
//echo (new Date('2025-12-31'))->addMonth(2); // '2026-02-28'
//echo (new Date('2025-12-31'))->subMonth(1); // '2025-11-30'
//echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'
//echo (new Date('2025-12-31'))->format('m-d');
//
//echo (new Date('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'
//echo $date;
