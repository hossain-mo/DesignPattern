<?php
namespace App\Creational\Builder;
use App\Creational\Builder\Product;
interface IBuilder{

    public function startUpUperation();
    public function buildBody();
    public function addWheels();
    public function endOperations();
    public function getVehicle(): Product;
}