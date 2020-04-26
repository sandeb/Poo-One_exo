<?Php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

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




