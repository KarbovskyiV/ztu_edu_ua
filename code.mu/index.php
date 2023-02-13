<?php

declare(strict_types=1);
include 'Classes/Date.php';
include 'Classes/Interval.php';
include 'Classes/Tag.php';
include 'Classes/File.php';
include 'Classes/Image.php';
include 'Classes/HtmlList.php';
include 'Classes/ListItem.php';
include 'Classes/ULHtml.php';
include 'Classes/OLHtml.php';
include 'Classes/Form.php';

// Data
//$date = new Date('2025-12-31');

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

// Interval
//$date1 = new Date('2025-12-31');
//$date2 = new Date('2026-11-28');
//
//$interval = new Interval($date1, $date2);

//echo $interval->toDays();   // выведет разницу в днях
//echo $interval->toMonths(); // выведет разницу в месяцах
//echo $interval->toYears();  // выведет разницу в годах

// File
//$file = new File('text.txt');

//echo $file->getPath();
//echo $file->getDir();
//echo $file->getName();
//echo $file->getExt();
//echo $file->getSize();
//echo $file->getText();
//echo $file->setText('text');
//echo $file->appendText('tpt');
//echo $file->copy('.test');
//echo $file->delete();
//echo $file->rename('text.txt');
//echo $file->replace('F:\OSPanel\domains\ztu.edu\code.mu\files');


// Tag
//$input = new Tag('input');
//echo $input->open();
//
//$tag = new Tag('div');
//echo $tag->open() . 'text' . $tag->close();
//
//$img = new Tag('img');
//echo $img->open();
//
//$header = new Tag('header');
//echo $header->open() . 'Site header' . $header->close();

//$tag2 = new Tag('input');
//echo $tag2
//    ->setAttr('id', 'test')
//    ->removeAttr('id')
//    ->open();

//$tag3 = new Tag('div');
//echo $tag3->setAttr('id', 'test')->open();
//echo $tag3->close();

//$tag = new Tag('input');
//echo $tag
//    ->setAttrs(['id' => 'test', 'class' => 'eee'])
//    ->open();

//$tag = new Tag('input');
//echo $tag
//    ->setAttr('id', 'test')
//    ->setAttr('disabled', true)
//    ->open();

// щоб не створювати змінні виводим таким чином
//echo (new Tag('input'))
//    ->setAttr('name', 'name1')
//    ->open();
//
//echo (new Tag('input'))
//    ->addClass('eee')
//    ->addClass('bbb')
//    ->addClass('eee')
//    ->open();

//echo (new Tag('input'))
//    ->setAttr('class', 'eee aaa kkk')
//    ->removeClass('aaa')
//    ->open();

//$image = new Tag('img');

//echo (new Image())->setAttrs(['src' => '/img.png', 'width' => '300' , 'height' => '200'])->open();

//$image = (new Image())->setAttr('src', '/img.png');
//$image->setAttr('width', '200');
//echo $image;

//$list = new HtmlList('ul');
//
//echo $list
//    ->addItem((new ListItem())->setText('item1'))
//    ->addItem((new ListItem())->setText('item2'))
//    ->addItem((new ListItem())->setText('item3'))
//    ->show();

//$ul = new ULHtml;
//$ol = new OLHtml;
//
//echo $ul
//    ->addItem((new ListItem())->setText('item1'))
//    ->addItem((new ListItem())->setText('item2'))
//    ->addItem((new ListItem())->setText('item3'));
//
//echo $ol
//    ->addItem((new ListItem())->setText('item1'))
//    ->addItem((new ListItem())->setText('item2'))
//    ->addItem((new ListItem())->setText('item3'));

$form = (new Form)->setAttrs([
    'action' => 'test.php',
    'method' => 'POST'
]);
echo $form->open();
echo $form->close();
