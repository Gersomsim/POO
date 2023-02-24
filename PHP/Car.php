<?php
require_once('Account.php');
class Car{
  private $id;
  private $license;
  private $driver;
  protected $passenger;

  public function __construct( string $license, Driver $driver ){
    $this->license = $license;
    $this->driver = $driver;
  }
  public function printDataCar()
  {
    echo "
    License: $this->license
    Driver: {$this->driver->name}
    Passenger: $this->passenger
    ";
  }
  public function getPassenger()
  {
    return $this->passenger;
  }
  public function setPassenger(int $passenger)
  {
    if ( $passenger == 4 ){
      $this->passenger = $passenger;
    }else{
      echo "Necesitas asignar 4 pasajeros";
    }
  }
}