<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
final class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

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

    public function setEnergy(string $energy): void
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }

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
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake) :void
    {
        $this->hasParkBrake = $hasParkBrake;
    }



    public function start()
    {
        try {
            if($this->hasParkBrake === true) {
                throw new Exception('Fuck! le frein ');
            }
        } catch (Exception $e) {
            echo "Exception received  : ". $e->getMessage();
        } finally {
            echo "Ma voiture roule comme un donut";
        }
    }
    public function switchOn(): int
    {
        return true;
    }

    public function switchOff(): int
    {
        return false;
    }
}
