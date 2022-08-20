<?php
require_once('User.php');

class Employee extends User
{
  private $birthday;
  private $age;
  private $salary;

  public function __construct($name, $surname, $birthday, $salary)
  {
    parent::__construct($name, $surname);

    $this->birthday = $birthday;
    $this->calculateAge($birthday);

    $this->salary =  $salary;
  }

  public function getBirthday()
  {
    return $this->birthday;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getSalary()
  {
    return $this->salary;
  }

  private function calculateAge($birthday)
  {
    $diff = date('Ymd') - date('Ymd', strtotime($this->birthday));
    $this->age = substr($diff, 0, 2);
  }
}
