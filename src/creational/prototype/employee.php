<?php
namespace App\Creational\Prototype;
use App\Creational\Prototype\Address;
abstract class Employee{
    public int $id;
    public string $name;
    public ?Address $address = null;
    public function __construct(){  }
    public abstract function shallowCopy(Employee $obj):Employee;
    public abstract function deepClone(Employee $obj):Employee;
    public function toString(){
        $address = $this->address;
        echo("id  : ".$this->id."\n");
        echo("name  : ".$this->name."\n");
        echo("address:  \nnumber : ".$address->streetNumber."\n   name : ".$address->streetName."  \n   zone :  ".$address->zone."   \n   city :    ".$address->city);
        echo "\n";
    }
}