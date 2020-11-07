<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start()
    {
        if ($this->hasParkBrake === true){
            throw new Exception("Attention, le frein à main est enclenché !");
        } else {
            return 'start';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

   
    public function start()
    {
        try {
            if ($this->hasParkBrake === true) {
                throw new Exception("Le frein à main est enclenché !");
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
            $this->setParkBrake(false);
        }
        finally {
            echo '<br>' . "Ma voiture roule comme un gros donut";
        }
    }

}
