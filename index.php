<?Php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('lapierre'); 
echo $bike->getName();
$bike->setColor('red');
echo $bike->getcolor();

$bike->setCurrentSpeed(15);
$bike->getCurrentSpeed();
echo $bike->forward();
echo $bike->brake();
echo $bike->getCurrentSpeed().'<br>';


$mustang = new Car('red', 4, 'fuel');
$mustang->setName('mustang');
$mustang->setCurrentSpeed(55);
echo $mustang->getName();
echo $mustang->getCurrentSpeed();
echo $mustang->start();

var_dump($mustang);



// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';



// // Instanciation d'un nouvel objet $rockrider

// $rockrider->setColor('yellow');
// var_dump($rockrider);
// // Instanciation d'un nouvel objet $tornado
// $tornado = new Bicycle();
// $tornado->color = 'black';
// var_dump($tornado);
// echo $tornado->forward();
// var_dump($tornado->forward());




