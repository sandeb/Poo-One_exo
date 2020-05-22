<?Php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Speedometre.php';

$bike = new Bicycle('black',2); 
$bike->setCurrentSpeed(15);
echo $bike->forward().'<br>';
echo $bike->brake().'<br>';
echo $bike->getCurrentSpeed().'<br>'.'<br>';

$mustang = new Car ('red', 4, 'electric');
$mustang->setName('mustang');
$mustang->setCurrentSpeed(55);
echo $mustang->getName();
echo $mustang->getCurrentSpeed();
echo $mustang->brake().'<br>'.'<br>';

$truck = new Truck('full','red',4 ,'electric');
$truck->setName('trucky');
$truck->setCurrentSpeed(55);
echo $truck->getName();
echo $truck->getCurrentSpeed();
echo $truck->brake();
echo $truck->levelCharge().'<br>'.'<br>';


$StarTruck = new Truck('In falling','yellow',8 ,'fuel');
$StarTruck->setCurrentSpeed(45);
$truck->setName('trickytruck');
echo $truck->getName();
echo $StarTruck->getCurrentSpeed();
echo $StarTruck->brake();
echo $StarTruck->levelCharge().'<br>'.'<br>';

$skate = new Skateboard('red',1);


$motorway = new MotorWay();
$motorway->addVehicule($mustang);
$motorway->addVehicule($truck);

$pedestrianway = new PedestrianWay();
$pedestrianway->addVehicule($skate);
$pedestrianway->addVehicule($bike);

$residentialway = new ResidentialWay();
$residentialway->addVehicule($StarTruck);

$car = new Car('yellow', 4, 'electric');
$car->setHasParkBrake(false);
echo $car->start().'<br>';

echo Speedometre::convertKmOnMiles(10).'<br>';

echo Speedometre::convertMilesOnKm( 250).'<br>';