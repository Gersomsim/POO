<?php
require_once('Car.php');

class UberPool extends Car{
  public $brand;
  public $model;

  public function __construct(
    string $licence,
    Driver $driver,
    string $brand,
    string $model
  ){
    parent::__construct( $licence, $driver);
    $this->brand = $brand;
    $this->model = $model;
  }
}