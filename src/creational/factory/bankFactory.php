<?php 
namespace App\Creational\Factory;
use App\Creational\Factory\IBank;

interface BanckFactory{
    public function getBank():IBank;
}