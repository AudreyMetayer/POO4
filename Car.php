<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
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

    /**
     * @return bool
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

   
    public function start()
    {
        try {
            if ($this->hasParkBrake === True) {
                throw new Exception("Le frein à main est enclenché !");
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
            $this->setHasParkBrake(false);
        }
        finally {
            echo '<br>' . "Ma voiture roule comme un gros donut";
        }
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
