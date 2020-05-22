<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicules = [];

    /**
     * @var int
     */
    private $nbLane;

    /**
     * @var int
     */
    private $maxSpeed;

    abstract public function addVehicule($param);

    /**
     * @return array
     */
    public function getCurrentVehicules()
    {
        return $this->currentVehicules;
    }

    /**
     * @param array $currentVehicules
     */
    public function setCurrentVehicules($currentVehicules)
    {
        $this->currentVehicules = $currentVehicules;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}