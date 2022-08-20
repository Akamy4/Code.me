<?php
require_once('User.php');

class Student extends User
{
  private $course;

  public function setAge($age)
  {
    // Если возраст меньше или равен 25:
    if ($age <= 25) {
      // Вызываем метод родителя:
      parent::setAge($age); // в родителе выполняется проверка age >= 18 
    }
  }

  public function setName($name)
  {
    if (strlen($name) < 10) {
      parent::setName($name);
    }
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
