<?php
namespace App\Creational\Prototype;
use App\Creational\Prototype\Employee;
use App\Creational\Prototype\Address;
class RegularEmployee extends Employee{
    public function __construct(){
        
    }
    
    public function shallowCopy(Employee $empObject):Employee{
        $cloneObject = new RegularEmployee();
        $cloneObject->id = $empObject->id;
        $cloneObject->name = $empObject->name;
        $cloneObject->address = $empObject->address;
        return $cloneObject;
    }
    public function deepClone(Employee $empObject):Employee{
        $cloneObject = new RegularEmployee();
        $cloneObject->id = $empObject->id;
        $cloneObject->name = $empObject->name;
        $address = $empObject->address;
        $addressData = ['street_number' => $address->streetNumber, 
        'street_name' => $address->streetName, 'zone' => $address->zone, 'city' => $address->city];
        $cloneObject->address = new Address($addressData);
        return $cloneObject;
    }
}