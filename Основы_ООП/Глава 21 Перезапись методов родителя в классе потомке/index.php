<?php
require_once('Student.php');

$student = new Student;

$student->setAge(24);    // укажем корректный возраст 
echo $student->getAge(); // выведет 24 - возраст поменялся 

echo '<br>';

$student->setAge(30);    // укажем некорректный возраст 
echo $student->getAge(); // выведет 24 - возраст не поменялся

echo '<br>';

$student->setName('Akame'); // укажем корректное Имя
echo $student->getName();   // выведет Akame - Имя поменялось 

echo '<br>';

$student->setName('Akame_Rei_Asuka');    // укажем некорректное имя
echo $student->getName();                // выведет Akame - Имя не поменялось