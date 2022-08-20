<?php
class Employee
{
  public $name;
  public $age;
  public $salary;

  public function __construct($name, $age, $salary)
  {
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }
}

$user1 = new Employee('Eric', 25, 1000);
$user2 = new Employee('Kyle', 30, 2000);

print_r($user1);
echo '<br>';
print_r($user2);
echo '<br>';

echo $user1->salary + $user2->salary;
