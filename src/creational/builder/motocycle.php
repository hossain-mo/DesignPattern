<?php
namespace App\Creational\Builder;
use App\Creational\Builder\IBuilder;
use App\Creational\Builder\Product;
class MotoCycle implements IBuilder{
    private ?Product $product = null;
    private string $brandName;
    public function __construct($brandName){
        $this->product = new Product();
        $this->brandName = $brandName;
    }
    public function startUpUperation(){
        $this->product->add("MotoCycle Model Name is :".$this->brandName);
    }
    public function buildBody(){
        $this->product->add("the bode was added");
    }
    public function addWheels(){
        $this->product->add("the wheels was added");
    }
    public function endOperations(){
        $this->product->add("finish");
    }
    public function getVehicle(): Product{
        return $this->product;
    }
}