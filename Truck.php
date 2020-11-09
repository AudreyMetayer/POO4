<?php
require_once 'Vehicle.php';

class Truck extends Vehicle implements LightableInterface
{
    private $storageCapacity;
    private $energy;
    private $energyLevel;
    private $load = 0;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function fullLoad(): string
    {
        if ($this->storageCapacity === $this->load){
            return 'Full';
        } else {
            return 'Not full, you can load again ! ' . '</br>';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoad()
    {
        return 'You are at ' . $this->load . 'kg. ' . '</br>' . $this->fullLoad();
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function switchOn() : bool
    {
        return true;
    }

    public function switchOff() : bool
    {
        return false;
    }
}