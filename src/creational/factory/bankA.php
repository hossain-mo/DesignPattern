<?php 
namespace App\Creational\Factory;
use App\Creational\Factory\IBank;
class BankA implements IBank{
    public function withdraw(){
        return "Bank A\n";
    }
}