<?php
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


print_r($object);
