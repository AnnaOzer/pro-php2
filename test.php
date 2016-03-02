<?php

/*$ex = new Exception('Сообщение об исключении');

var_dump($ex);

echo $ex->getMessage();

throw $ex;
*/

require __DIR__ . '/autoload.php';

$a = new \App\Collection();
$a[1] = 1;
$a[11] = 11;
$a[2] = 234;

/* var_dump($a);
echo $a[1];*/

foreach ($a as $el) {
    echo $el;
}