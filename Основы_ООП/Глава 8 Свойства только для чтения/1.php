<?php
class Employee
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

  public function getSurname()
  {
    return $this->surname;
  }

  public function getSalary()
  {
    return $this->salary;
  }

  public function setSalary($salary)
  {
    $this->salary = $salary;
  }
}


$user = new Employee('John', 'Akame', 2500);

echo $user->getName() . " " . $user->getSurname() . " " . $user->getSalary() . " ";

$user->setSalary(3000);

echo "<br>" . $user->getName() . " " . $user->getSurname() . " " . $user->getSalary() . " ";
