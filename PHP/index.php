<?php
  require_once('UberX.php');
  require_once('UberVan.php');
  require_once('Driver.php');

  $uber_x = new UberX('AWS232', new Driver('Juan Lopez', 'JL123'), 'Chevrolet', 'Spark');
  $uber_x->setPassenger(4);
  $uber_x->printDataCar();

  $uber_van = new UberVan( 'AZUR234', new Driver('Juan Lopez', 'JL234'), [], []);
  $uber_van->setPassenger(6);
  $uber_van->printDataCar();
?>