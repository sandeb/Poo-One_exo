<?php
require_once 'HighWay.php';
require_once 'Car.php';




final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    private $nbLane = 4;

    /**
     * @var int
     */
    private $maxSpeed = 130;

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
        if($param instanceof Car) {
            $this->currentVehicules [] = $param;
        }
    }

}