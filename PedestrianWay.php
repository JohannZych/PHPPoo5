<?php

final class PedestrianWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        if (!($vehicle instanceof Bicycle) && !($vehicle instanceof Skateboard){
            $this->currentVehicle = $currentVehicle;
        }
    }
}