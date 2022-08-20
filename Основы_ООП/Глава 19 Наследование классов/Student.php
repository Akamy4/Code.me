<?php
require_once('User.php');

class Student extends User
{
  private $course = 1;

  public function getCourse()
  {
    return $this->course;
  }

  public function transferToNextCourse()
  {
    if ($this->isCourseCorrect($this->course + 1)) {
      $this->course++;
    }
  }

  private function isCourseCorrect($course)
  {
    return $course > 0 && $course < 6;
  }
}
