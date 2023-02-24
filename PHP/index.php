<?php
  require_once('Car.php');
  require_once('Account.php');
  $car = new Car('AWS123', new Account('Juan Perez', 'JP354'));
  $car->printDataCar();

?>