<?php
require_once 'vendor/autoload.php';
use App\Creational\AbstractFactory\BankFactoryA;
use App\Creational\AbstractFactory\BankFactoryB;
use App\Creational\AbstractFactory\BankB;
use App\Creational\AbstractFactory\BankA;
use App\Creational\AbstractFactory\VisaCard;
use App\Creational\AbstractFactory\MasterCard;
$banckFactory = new BankFactoryA();
$code  = "147852";
$bank = $banckFactory->getBank($code);
$paymentCode = "56";
$payment = $banckFactory->getPayment($paymentCode);
echo ($bank->withdraw());
echo ($payment->getName());
echo ($payment->getProviderInfo());

$code  = "111111";
$bank = $banckFactory->getBank($code);
$paymentCode = "56";
$payment = $banckFactory->getPayment($paymentCode);
echo ($bank->withdraw());
echo ($payment->getName());
echo ($payment->getProviderInfo());
$banckFactoryB = new BankFactoryB();
$code  = "147852";
$bankB = $banckFactoryB->getBank($code);
echo ($bankB->withdraw());

$code  = "111111";
$bankB = $banckFactoryB->getBank($code);
$paymentCodeB = "56";
$paymentB = $banckFactoryB->getPayment($paymentCode);
echo ($bankB->withdraw());
echo ($paymentB->getName());
echo ($paymentB->getProviderInfo());
