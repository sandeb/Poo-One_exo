<?php


require_once 'HighWay.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

final class PedestrianWay extends HighWay
{
    /**
     * @var int
     */
    private $nbLane = 1;

    /**
     * @var int
     */
    private $maxSpeed = 10;

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
        if($param instanceof Bicycle || $param instanceof Skateboard ) {

            $this->currentVehicules [] = $param;
        }
    }
}