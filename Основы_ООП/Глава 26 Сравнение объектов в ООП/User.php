<?php

class User
{

  private $name;
  private $surname;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
  }
}
