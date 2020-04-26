<?Php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);
var_dump($bicycle);

$bike = new Bicycle('black',2); 
$bike->setCurrentSpeed(15);
var_dump($bike);
echo $bike->forward();
echo $bike->brake();
echo $bike->getCurrentSpeed().'<br>';

$mustang = new Car ('red', 4, 'electric');
var_dump($mustang);
$mustang->setName('mustang');
$mustang->setCurrentSpeed(55);
echo $mustang->getName();
echo $mustang->getCurrentSpeed();
echo $mustang->brake();

$truck = new Truck('full','red',4 ,'electric');
var_dump($truck);
$truck->setName('trucky');
$truck->setCurrentSpeed(55);
echo $truck->getName();
echo $truck->getCurrentSpeed();
echo $truck->brake();
echo $truck->levelCharge().'<br>';


$StarTruck = new Truck('In falling','yellow',8 ,'fuel');
$StarTruck->setCurrentSpeed(45);
$truck->setName('trickytruck');
echo $truck->getName();
echo $StarTruck->getCurrentSpeed();
echo $StarTruck->brake();
echo $StarTruck->levelCharge();

$skate = new Skateboard('red',1);


$motorway = new MotorWay();
$motorway->addVehicule($mustang);
$motorway->addVehicule($truck);
var_dump($motorway);
$pedestrianway = new PedestrianWay();
$pedestrianway->addVehicule($skate);
$pedestrianway->addVehicule($bike);
var_dump($pedestrianway);
$residentialway = new ResidentialWay();
$residentialway->addVehicule($StarTruck);
var_dump($residentialway);



$car = new Car('yellow', 4, 'electric');
$car->setHasParkBrake(false);
echo $car->start();
var_dump($car);
