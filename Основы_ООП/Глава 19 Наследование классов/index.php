<?php
require_once('Employee.php');

$employee = new Employee;

$employee->setSalary(1000); // метод класса Employee
$employee->setName('Akame'); // метод унаследован от родителя
$employee->setAge(25); // метод унаследован от родителя

echo "Employee: " . '<br>';
echo $employee->getSalary() . ' '; // метод класса Employee
echo $employee->getName() . ' '; // метод унаследован от родителя
echo $employee->getAge() . '<br>'; // метод унаследован от родителя

require_once('Student.php');

$student = new Student;

$student->setName('Rei'); // метод унаследован от родителя
$student->setAge(18); // метод унаследован от родителя

echo '<br>';

echo "Student: " . '<br>';
echo $student->getCourse() . ' '; // метод класса Student
echo $student->getName() . ' '; // метод унаследован от родителя
echo $student->getAge() . '<br>'; // метод унаследован от родителя

$student->transferToNextCourse();

echo '<br>';

echo "Student: " . '<br>';
echo $student->getCourse() . ' '; // метод класса Student
echo $student->getName() . ' '; // метод унаследован от родителя
echo $student->getAge() . '<br>'; // метод унаследован от родителя

require_once('Programmer.php');

$programmer = new Programmer;

$programmer->setName("Asuka");
$programmer->setAge(18);
$programmer->setSalary(2000);
$programmer->add('PHP');
$programmer->push(['HTML', 'CSS', 'JS']);

echo '<br>';

echo "Programmer: " . '<br>';
echo $programmer->getName() . ' '; // метод унаследован от родителя
echo $programmer->getAge() . ' '; // метод унаследован от родителя
echo $programmer->getSalary() . ' '; // метод унаследован от родителя
echo $programmer->getLangs() . '<br>'; // метод класса Programmer

require_once('Driver.php');

$driver = new Driver;

$driver->setName("Sindzi");
$driver->setAge(18);
$driver->setSalary(500);
$driver->setDriving_category('A');
$driver->setDriving_experience(4);

echo '<br>';

echo "Driver: " . '<br>';
echo $driver->getName() . ' '; // метод унаследован от родителя
echo $driver->getAge() . ' '; // метод унаследован от родителя
echo $driver->getSalary() . ' '; // метод унаследован от родителя
echo $driver->getDriving_category() . ' '; // метод класса Driver
echo $driver->getDriving_experience() . '<br>'; // метод класса Driver