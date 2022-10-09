<?php
require_once  'Vehicle.php';

class Truck extends Vehicle
{
    private int $ship;
    private bool $load;

    public function setShipping(string $ship): Truck
    {
        if ($load = 0){
            $this->ship= $ship;

        }else {
            $this->ship = "La chargement est complet";
        }
        return $this;
    }

    public function setLoading(): string
    {
        $load = 1;
        $this->load = $load;
        return "Chargement complet";
    }

    public function getShipping(): int
    {
        return $this->ship;
    }

    public function getLoading(): string
    {
        if ($this->load == 1){
            return "Chargement Complet";
        } else{
            return "Chargement Vide";
        }

    }
}