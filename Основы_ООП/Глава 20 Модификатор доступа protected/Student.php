<?php
require_once('User.php');

class Student extends User
{
  private $course;

  // Реализуем этот метод:
  public function addOneYear()
  {
    $this->age++;
  }

  public function getCourse()
  {
    return $this->course;
  }

  public function setCourse($course)
  {
    $this->course = $course;
  }
}
