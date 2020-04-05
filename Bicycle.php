<?php
class Bicycle{
    /**
    * @var string
    */
    public $name;

    /**
    * @var string
    */
    private $color;

    /**
     * @var integer
    */
    private $currentSpeed;

    /**
    * @var integer
    */
    public $nbSeats = 1;

    /**
    * @var integer
    */
    public $nbWheels = 2;




/***********************************************************************NAME */
  
    public function __construct($name)
    {
        $this->name = $name;
    }
    /**
    * @param $nom string
    */
    public function getName(): string
    {
        return 'the model of my Bicycle is ' .$this->name.'<br>';;
    }
     /**
    * @return string
    */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

/***********************************************************************COLOR */
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'the color  is '. $this->color .'<br>';    
    }
    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

/******************************************************************CURRENTSPEED */
    /**
     * @return int string
     */
    public function getCurrentSpeed()
    {
        return 'the current speed is '.$this->currentSpeed .'km/hr'. '<br>';
    }
    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void{ 
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }    
    }


/*********************************************************************fORWARD */
    public function forward(){
        $this->currentSpeed = 30;
        return "Go !";
    }
/***********************************************************************BRAKE */
    public function brake(): string{
        $sentence = "";
        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}








