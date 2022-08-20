<?php
require_once('User.php');
require_once('Employee.php');

$user = new User('John', 'Akame', '+77473232110');

echo $user->getName() . " " . $user->getSurname() . " " . $user->getNumber() . "<br>";
$user->setNumber('+77073050074');
echo $user->getName() . " " . $user->getSurname() . " " . $user->getNumber() . "<br>";

$employee = new Employee('Ayanami', 'Rei', 300);

echo $employee->getName() . " " . $employee->getSurname() . " " . $employee->getSalary() . "<br>";
$employee->setSalary(5555);
echo $employee->getName() . " " . $employee->getSurname() . " " . $employee->getSalary() . "<br>";
