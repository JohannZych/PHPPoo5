<?php
require_once  'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn()
    {
        $currentSpeed = $this->currentSpeed();
        if ($currentSpeed > 10){
            return true;
        } else {
            return false;
        }
    }

    public function swichOff()
    {
        return false;
    }
}