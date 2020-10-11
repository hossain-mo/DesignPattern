<?php 
namespace App\Creational\Factory;
use App\Creational\Factory\IBank;
class BankB implements IBank{
    public function withdraw(){
        return "Bank B\n";
    }
}