<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->hasParkBrake = true;
    }

    /**
     * @return bool
     */
    public function isHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setParkBrake(): void
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    public function start()
    {
        if ($this->isHasParkBrake() === false){
            throw new Exception('Park Brake');
        }

        try {
            $this->forward();
        } catch (Exception $e) {
            echo "Exception : " , $e;
        } finally {
            $this->setParkBrake();
            return 'Ma voiture roule comme un donut';
        }
    }


    public
    function getEnergy(): string
    {
        return $this->energy;
    }

    public
    function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public
    function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public
    function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}