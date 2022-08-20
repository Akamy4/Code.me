<?php
require_once('Student.php');
$student = new Student('Akame');
echo $student->getName() . " " . $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getName() . " " . $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getName() . " " . $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getName() . " " . $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getName() . " " . $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getName() . " " . $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getName() . " " . $student->getCourse() . '<br>';
