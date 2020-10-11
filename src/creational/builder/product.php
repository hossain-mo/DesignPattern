<?php
namespace App\Creational\Builder;
class Product{
    private $parts;
    public function __construct(){
        $this->parts = array();
    }
    public function add(string $item){
        array_push($this->parts,$item);
    }

    public function show(){
        foreach($this->parts as $part){
            echo $part ."  ";
        }
        echo "\n";
    }
}