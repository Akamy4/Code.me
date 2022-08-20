<?php
class Student
{
  public $name;
  public $course;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setCourse($course)
  {
    if ($this->isCourseCorrect($course)) {
      $this->course = $course;
    }
  }

  public function transferToNextCourse()
  {
    $newCourse = $this->course + 1;

    if ($this->isCourseCorrect($newCourse)) {
      $this->course = $newCourse;
    }
  }

  private function isCourseCorrect($course)
  {
    if ($course >= 1 && $course <= 5) {
      return true;
    } else {
      return false;
    }
  }
}


$student = new Student;
$student->setName("Akame");
$student->setCourse(1);
print_r($student);
echo '<br>';
$student->transferToNextCourse();
print_r($student);
echo '<br>';
$student->transferToNextCourse();
print_r($student);
echo '<br>';
$student->transferToNextCourse();
print_r($student);
echo '<br>';
$student->transferToNextCourse();
print_r($student);
echo '<br>';
$student->transferToNextCourse();
print_r($student);
echo '<br>';
$student->transferToNextCourse();
print_r($student);
echo '<br>';
