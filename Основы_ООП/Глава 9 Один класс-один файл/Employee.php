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
    if ($this->isSalaryCorrect($salary)) {
      $this->salary = $salary;
    } else {
      $this->salary = 3000;
    }
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
    if ($this->isSalaryCorrect($salary)) {
      $this->salary = $salary;
    }
  }

  private function isSalaryCorrect($salary)
  {
    return $salary > 1000 && $salary < 6000;
  }
}
