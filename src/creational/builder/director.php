<?php
namespace App\Creational\Builder;
use App\Creational\Builder\IBuilder;
class Director{

    private ?IBuilder $builder = null;
    
    public function build(IBuilder $builder){
        $this->builder = $builder;
        $this->builder->startUpUperation();
        $this->builder->buildBody();
        $this->builder->addWheels();
        $this->builder->endOperations();
    }
}