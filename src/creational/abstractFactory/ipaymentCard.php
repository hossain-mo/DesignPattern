<?php 
namespace App\Creational\AbstractFactory;
interface IPaymentCard{
    public function getName();
    public function getProviderInfo();
}