<?php
require_once('Employee2.php');
require_once('Student2.php');

class UsersCollection
{
  private $employees = [];
  private $students = [];

  public function add($user)
  {
    if ($user instanceof Employee2) {
      $this->employees[] = $user;
    }
    if ($user instanceof Student2) {
      $this->students[] = $user;
    }
  }

  public function getTotalSalary()
  {
    $sum = 0;

    foreach ($this->employees as $employee) {
      $sum += $employee->getSalary();
    }
    return $sum;
  }

  public function getTotalScholarship()
  {
    $sum = 0;

    foreach ($this->students as $student) {
      $sum += $student->getScholarship();
    }
    return $sum;
  }

  public function getTotalPayment()
  {
    return $this->getTotalSalary() + $this->getTotalScholarship();
  }
}
