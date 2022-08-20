<?php
require_once('Student.php');

$student = new Student();

$student->setName('john'); // установим имя
$student->setCourse(3);    // установим курс
$student->setAge(25);      // установим возраст в 25

$student->addOneYear();    // увеличим возраст на единицу 
echo $student->getAge();   // выведет 26