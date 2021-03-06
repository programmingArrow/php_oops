<?php
namespace App;

use App\Vehicle;

class Car extends Vehicle
{
    public function __construct($name, $gears)
    {
        parent::__construct($name, $gears);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGearCount()
    {
        return $this->gears;
    }
}