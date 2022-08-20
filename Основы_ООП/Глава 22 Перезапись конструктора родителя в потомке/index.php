<?php
require_once('Employee.php');

$employee = new Employee('Akame', 'Aznabakiev', '2002-01-28', 3000);

echo $employee->getName() . ' ' . $employee->getSurname() . ' ' . $employee->getAge() . ' ' . $employee->getSalary();
