<?php
require_once('Employee.php');

$employee = new Employee;

$employee->setName('Rei');
$employee->setAge(14);
$employee->setSalary(3000);

echo "Имя работника = " . $employee->getName() . " возраст = " . $employee->getAge() . " зарплата = " . $employee->getSalary();