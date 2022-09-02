<?php
require_once('Employee.php');
require_once('Student.php');
require_once('Quadrate.php');
require_once('Rectangle.php');

$employee = new Employee('Akame', 2000);
$student = new Student('Rei', 4000);

echo $employee->getName() . " " . $employee->getSalary();
echo "<br>";
echo $student->getName() . " " . $student->getScholarship();

echo "<br>";

$employee->increaseRevenue(700);
$student->increaseRevenue(500);

echo $employee->getName() . " " . $employee->getSalary();
echo "<br>";
echo $student->getName() . " " . $student->getScholarship();

echo "<br>";

$employee->decreaseRevenue(700);
$student->decreaseRevenue(500);

echo $employee->getName() . " " . $employee->getSalary();
echo "<br>";
echo $student->getName() . " " . $student->getScholarship();

echo "<br>";

$quadrate = new Quadrate(6);

echo "Площадь квадрата = " . $quadrate->getSquare() . " Периметр квадрата = " . $quadrate->getPerimetr() . " Сумма площади и периметра = " . $quadrate->getSquarePerimeterSum();

echo "<br>";

$rectangle = new Rectangle(4, 6);

echo "Площадь квадрата = " . $rectangle->getSquare() . " Периметр квадрата = " . $rectangle->getPerimetr() . " Сумма площади и периметра = " . $rectangle->getSquarePerimeterSum();
