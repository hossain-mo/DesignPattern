<?php 
namespace App\Creational\AbstractFactory;
use App\Creational\AbstractFactory\IBank;
class BankB implements IBank{
    public function withdraw(){
        return "Bank B\n";
    }
}