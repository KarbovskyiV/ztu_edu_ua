<?php

declare(strict_types=1);

class Text
{
    public static string $dir = __DIR__;

    public static function read(string $fileName)
    {
        return nl2br(file_get_contents($fileName));
    }

    public static function write(string $fileName, $value)
    {
        return file_put_contents($fileName, $value . "\n", FILE_APPEND);
    }

    public function delete(string $fileName)
    {
        file_put_contents($fileName, '');
    }
}

$var = new Text();
//echo $var::$dir;
//echo $var::read('one.txt');
//$var::write('one.txt', 'tests');
//$var->delete('one.txt');
