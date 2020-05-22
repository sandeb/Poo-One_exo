<?php

class Vehicle{
    /**
    * @var string
    */
    private $name;
    /**
    /**
    * @var string
    */
    protected $color;

    /**
    * @var integer
    */
    protected $currentSpeed;

    /**
    * @var integer
    */
    protected $nbSeats;

    /**
    * @var integer
    */
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    }

//**********************************************************************NAME 

    /**
    * @param $nom string
    */

    public function getName()
    {
            return 'the model is ' .$this->name.'<br>';
    }
     /**

    * @return string
    */
    public function setName($name)
    {
            $this->name = $name;
        return $this;
    }
/*********************************************************************fORWARD */
    public function forward(): string
    {
    $this->currentSpeed = 15;
    return "Go !";
    }
 /***********************************************************************BRAKE */
    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
    $this->currentSpeed--;
    $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }
/******************************************************************CURRENTSPEED */
    public function getCurrentSpeed(): int
    {
    return $this->currentSpeed;
    //.'km/hr'. '<br>'
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
    if($currentSpeed >= 0){
    $this->currentSpeed = $currentSpeed;
    }
    }

    public function getColor(): string
    {
    return $this->color;
    }

    public function setColor(string $color): void
    {
    $this->color = $color;
    }

    public function getNbSeats(): int
    {
    return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
    $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
    return $this->nbWheels;
    }

    public function setNbWheels (int $nbWheels): void
    {
    $this->nbWheels = $nbWheels;
    }
}


