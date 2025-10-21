<?php

class Car
{
    public $name = "Fabie";
    public $gear = "manual";
    public $fuel = "diesel";

    public function __construct($name, $gear, $fuel){
        $this->name = $name;
        $this->gear = $gear;
        $this->fuel = $fuel;
    }

    public function nastartuj(){
        return "vruuuum";
    }
}
