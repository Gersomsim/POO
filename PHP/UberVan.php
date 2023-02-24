<?php
require_once('Car.php');

class UberVan extends Car{
  public $typeCarAccepted;
  public $seatsMaterial;

  public function __construct(
    string $licence,
    Driver $driver,
    array $typeCarAccepted,
    array $seatsMaterial
  ){
    parent::__construct( $licence, $driver);
    $this->typeCarAccepted = $typeCarAccepted;
    $this->seatsMaterial = $seatsMaterial;
  }

  public function setPassenger(int $passenger)
  {
    if ($passenger == 6){
      $this->passenger = $passenger;
    }else{
      echo "Necesitas asignar 6 pasajeros";
    }
  }
}