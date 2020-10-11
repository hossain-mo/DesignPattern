<?php 
namespace App\Creational\AbstractFactory;
use App\Creational\AbstractFactory\BankFactory;
use App\Creational\AbstractFactory\IPaymentCard;
use App\Creational\AbstractFactory\MasterCard;
use App\Creational\AbstractFactory\VisaCard;
use App\Creational\AbstractFactory\IBank;
use App\Creational\AbstractFactory\BankA;
use App\Creational\AbstractFactory\BankB;

class BankFactoryB implements BankFactory{
    public function getBank(string $code):IBank{
        switch($code){
            case "147852": return new BankA();
            case "111111": return new BankB();
        }
        return null;
    }
    public function getPayment(string $code):IPaymentCard{
        switch($code){
            case "56": return new VisaCard();
            case "96": return new MasterCard();
        }
        return null;
    }
}