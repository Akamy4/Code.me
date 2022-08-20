<?php
class Empoyee
{
  private $name;
  private $age;
  private $salary;

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($age)
  {
    if ($this->isAgeCorrect($age)) {
      $this->age = $age;
    }
  }

  public function getSalary()
  {
    return $this->salary . '$';
  }

  public function setSalary($salary)
  {
    $this->salary = $salary;
  }

  private function isAgeCorrect($age)
  {
    return $age >= 0 && $age <= 100;
  }
}

$user1 = new Empoyee;

$user1 -> setName('John');
$user1 -> setAge (53);
$user1 -> setSalary(2000);

echo $user1 -> getName().'<br>';
echo $user1 -> getAge().'<br>';
echo $user1 -> getSalary().'<br>';