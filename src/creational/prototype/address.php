<?php
namespace App\Creational\Prototype;
class Address{
    public int $streetNumber;
    public string $streetName;
    public string $zone;
    public string $city;

    public function __construct(array $data){
        $this->streetNumber = $data['street_number'];
        $this->streetName = $data['street_name'];
        $this->zone = $data['zone'];
        $this->city = $data['city'];
    }
}