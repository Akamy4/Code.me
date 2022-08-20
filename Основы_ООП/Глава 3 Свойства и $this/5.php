<?php

use Employee as GlobalEmployee;

class Employee
{
  public $name;
  public $salary;

  public function doubleSalary()
  {
    return $this->salary * 2;
  }
}

$user =  new Employee;
$user->name = "Akame";
$user->salary = 2000;

echo $user->doubleSalary() . "<br>";

$user2 = new Employee;
$user2->name = "Petya";
$user2->salary = 6000;
echo $user2->doubleSalary();
