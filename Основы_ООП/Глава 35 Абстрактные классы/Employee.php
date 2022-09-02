<?php
require_once('User.php');

class Employee extends User
{
  private $salary;

  public function __construct($name, $salary)
  {
    $this->salary = $salary;
    parent::__construct($name);
  }

  public function getSalary()
  {
    return $this->salary;
  }

  public function increaseRevenue($value)
  {
    $this->salary += $value;
  }

  public function decreaseRevenue($value)
  {
    $this->salary -= $value;
  }
}
