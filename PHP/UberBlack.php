<?php
require_once('Car.php');

class UberBlack extends Car{
  public $typeCarAccepted;
  public $seatsMaterial;

  public function __construct(
    string $licence,
    Account $driver,
    array $typeCarAccepted,
    array $seatsMaterial
  ){
    parent::__construct( $licence, $driver);
    $this->typeCarAccepted = $typeCarAccepted;
    $this->seatsMaterial = $seatsMaterial;
  }
}