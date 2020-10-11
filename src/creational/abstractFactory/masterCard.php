<?php 
namespace App\Creational\AbstractFactory;
use App\Creational\AbstractFactory\IPaymentCard;
class MasterCard implements IPaymentCard{
    public function getName(){
        return "Master Card\n";
    }
    public function getProviderInfo(){
        return "Info from Master Card\n";
    }
}