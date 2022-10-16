<?php

class HighWay
{
    private array $currentVehicle;
    private int $nbLane;
    private int $maxSpeed;

    /**
     * @param array $currentVehicle
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(array $currentVehicle, int $nbLane, int $maxSpeed)
    {
        $this->currentVehicle = $currentVehicle;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     */
    public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public abstract function addVehicle($vehicle);
}