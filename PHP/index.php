<?php
  require_once('UberX.php');
  require_once('UberPool.php');

  $uber_x = new UberX('AWS232', new Account('Juan Lopez', 'JL123'), 'Chevrolet', 'Spark');
  $uber_x->printDataCar();

  $uber_pool = new UberPool('AZUR12', new Account('Andrea Jaimes','AJ123'), 'Dodge', 'Attitude');
  $uber_pool->printDataCar();
?>