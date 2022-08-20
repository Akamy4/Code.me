<?php
require_once('Employee.php');

class EmployeeCollection
{
  private $employees = [];

  public function add($employee)
  {
    $this->employees[] = $employee;
  }

  public function getTotalSalary()
  {
    $sum = 0;

    foreach ($this->employees as $employee) {
      $sum += $employee->getSalary();
    }
    return $sum;
  }

  public function get()
  {
    return $this->employees;
  }

  public function count()
  {
    return count($this->employees);
  }
}
