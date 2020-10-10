<?php
namespace App\Creational\Singlton;
class Counter{
    public int $count = 0;
    private static ?self $instance = null;

    private function __construct(){

    }

    public static function getInsance(){
        if(is_null(self::$instance))
            self::$instance = new Counter();
        return self::$instance;
    }
    public function addOne(){
        $this->count++;
    }

}
