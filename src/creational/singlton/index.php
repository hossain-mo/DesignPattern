<?php
require_once 'vendor/autoload.php';
use App\Creational\Singlton\Counter;
$objectOne = Counter::getInsance();
$objectOne->addOne();
echo $objectOne->count."\n";
$objectTwo = Counter::getInsance();
$objectTwo->addOne();
echo $objectTwo->count."\n";