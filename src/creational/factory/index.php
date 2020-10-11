<?php
require_once 'vendor/autoload.php';
use App\Creational\Factory\BankFactoryA;
use App\Creational\Factory\BankFactoryB;
use App\Creational\Factory\BankB;
use App\Creational\Factory\BankA;
$banckFactory = new BankFactoryA();
$code  = "147852";
$bank = $banckFactory->getBank($code);
echo ($bank->withdraw());

$code  = "111111";
$bank = $banckFactory->getBank($code);
echo ($bank->withdraw());

$banckFactoryB = new BankFactoryB();
$code  = "147852";
$bankB = $banckFactoryB->getBank($code);
echo ($bankB->withdraw());

$code  = "111111";
$bankB = $banckFactoryB->getBank($code);
echo ($bankB->withdraw());
