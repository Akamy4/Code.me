<?php

use Employee as GlobalEmployee;

class Employee
{
  public $name;
  public $age;
  public $salary;

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getSalary()
  {
    return $this->salary;
  }

  public function checkAge()
  {
    if ($this->age > 18) {
      return true;
    } else {
      return false;
    }
  }
}

$user1 = new Employee;

$user1->name = "Akame";
$user1->age = 20;
$user1->salary = 3000;

echo $user1->getName();
echo '<br>';
echo $user1->getAge();
echo '<br>';
echo $user1->getSalary();
echo '<br>';
echo $user1->checkAge();
echo '<br>';

$user2 = new Employee;
$user2->name = "Farik";
$user2->age = 23;
$user2->salary = 6000;

echo $user1->getSalary() + $user2->getSalary();
