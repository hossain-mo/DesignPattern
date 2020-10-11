<?php 
namespace App\Creational\AbstractFactory;
use App\Creational\AbstractFactory\IBank;
class BankA implements IBank{
    public function withdraw(){
        return "Bank A\n";
    }
}