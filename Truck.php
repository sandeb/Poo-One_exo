<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $stockage;
    private $charge = 0;
    private $energy;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct($stockage, string $color, int $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->stockage = $stockage;
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    /**
     * @return mixed
     */
    public function getStockage()
    {
        return $this->stockage;
    }

    /**
     * @param mixed $stockage
     */
    public function setStockage($stockage)
    {
        $this->stockage = $stockage;
    }

    /**
     * @return int
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * @param int $charge
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
    }

    public function levelCharge(){
        if ($this->charge >= $this->stockage){
            return "Full";
        } else {
            return "In falling";
        }
    }
}
