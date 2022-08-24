<?php
class User
{
  private $name;
  private $surname;
  private $salary;

  public function __construct($name, $surname, $salary)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->salary = $salary;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSurame()
  {
    return $this->surname;
  }

  public function getSalary()
  {
    return $this->salary;
  }
}
