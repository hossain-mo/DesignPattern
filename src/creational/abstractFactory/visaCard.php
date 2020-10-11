<?php 
namespace App\Creational\AbstractFactory;
use App\Creational\AbstractFactory\IPaymentCard;
class VisaCard implements IPaymentCard{
    public function getName(){
        return "Visa Card\n";
    }
    public function getProviderInfo(){
        return "Info from Visa Card\n";
    }
}