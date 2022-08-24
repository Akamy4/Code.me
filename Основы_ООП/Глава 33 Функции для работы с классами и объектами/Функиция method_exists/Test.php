<?php
class Test
{
  private $name;
  private $surname;

  public function method1($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;

    return $this->name . ' ' . $this->surname;
  }
}
