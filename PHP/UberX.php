<?php
require_once('Car.php');

class UberX extends Car{
  public $brand;
  public $model;

  public function __construct(
    string $licence,
    Account $driver,
    string $brand,
    string $model
  ){
    parent::__construct( $licence, $driver);
    $this->brand = $brand;
    $this->model = $model;
  }
}