<?php 
namespace App\Creational\AbstractFactory;
use App\Creational\AbstractFactory\IBank;
use App\Creational\AbstractFactory\IPaymentCard;
interface BankFactory{
    public function getBank(string $code):IBank;
    public function getPayment(string $code):IPaymentCard;
}