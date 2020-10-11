<?php 
namespace App\Creational\Factory;
use App\Creational\Factory\IBank;
use App\Creational\Factory\BankA;
use App\Creational\Factory\BankB;
use App\Creational\Factory\BankFactory;
class BankFactoryB implements BankFactory{
    public function getBank(string $code):IBank{
        switch($code){
            case "147852": return new BankA();
            case "111111": return new BankB();
        }
        return null;
    }
}