<?php

class User extends Account
{

  public function __construct(string $name, string $document)
  {
    parent::__construct($name, $document);
  }
}
