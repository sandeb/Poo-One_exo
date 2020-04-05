<?php
Class Car {

    /**
    * @var string
    */
    private $name;
    /**
     * @var integer
     */
    private $nbWheels;
    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $typeEnerg;
    /**
     * @var integer
     */
    private $currentLevelEnerg;
    

    /**
     * @var string
     * @var integer
     * @var string 
     */
    public function __construct(string $color ,int $nbSeats,string $typeEnerg)
    {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->typeEnerg =$typeEnerg;
    }
/***********************************************************************NAME */
    /**
    * @param $nom string
    */
    public function getName()
    {
        return 'the model of my CAR is ' .$this->name.'<br>';;
    }
     /**
    * @return string
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
/***********************************************************************Wheels */
    /**
     * @return string int
     */
    public function getNbWheels(): string 
    {
        return 'My car have '. $this->nbWheels .' Wheels <br>';    
    }
    /**
     * @param string $nbWheels
     */
    public function setNbWheels(string $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
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
/*********************************************************************NBSEAT */
    /**
     * @return string int
     */
    public function getnbSeats(): string 
    {
        return 'My car have '. $this->nbSeats .' Wheels <br>';    
    }
    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }
/*****************************************************************TYPEENERGY */
    /**
     * @return string
     */
    public function getTypeEnerg(): string
    {
        return 'the type of energy is '. $this->typeEnerg .'<br>';    
    }
    /**
     * @param string $typeEnerg
     */
    public function setTypeEnerg(string $typeEnerg) : void
    {
        $this->typeEnerg = $typeEnerg;
    }
/******************************************************CURRENTLEVELENERGY */
    /**
     * @return string int
     */
    public function getCurrentLevelEnerg(): string 
    {
        return 'My car have '. $this->currentLevelEnerg .' Wheels <br>';    
    }
    /**
     * @param int $nbSeats
     */
    public function setCurrentLevelEnerg(int $currentLevelEnerg) : void
    {
        $this->currentLevelEnerg = $currentLevelEnerg;
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
/***********************************************************************START */
    public function start(): string{
        $sentence = "";
        if($this->currentSpeed >0) {

        
            $sentence .= "gogogo !!!";
        }
        $sentence .= "I'm never Stop !";
        return $sentence;
    }
}