<?php


require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    private $nbLane = 2;

    /**
     * @var int
     */
    private $maxSpeed = 50;

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

    public function addVehicule($param)
    {
        if($this instanceof Vehicle) {
            $this->currentVehicules [] = $param;
        }
    }

}