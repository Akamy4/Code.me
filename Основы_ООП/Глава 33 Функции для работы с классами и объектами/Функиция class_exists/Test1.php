<?php
class Test1
{
  private $name;
  private $surname;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;

    return $this->name . ' ' . $this->surname;
  }
}
