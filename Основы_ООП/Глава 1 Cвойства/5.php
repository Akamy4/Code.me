<?php

use Employee as GlobalEmployee;

class Employee
{
  public $name;
  public $age;
  public $salary;
}

$object = new Employee;

$object->name = 'John';
$object->age = 25;
$object->salary = 1000;

$object2 = new Employee;

$object2->name = 'Eric';
$object2->age = 26;
$object2->salary = 2000;

print_r($object);
echo "<br>";
print_r($object2);
echo "<br>";

echo "Сумма зарплат " . $object->salary + $object2->salary . "<br>";
echo "Сумма возрастов " . $object->age + $object2->age . "<br>";
