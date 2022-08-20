<?php
require_once('Employee.php');

class Driver extends Employee
{
  private $driving_experience;
  private $driving_category;

  public function getDriving_experience()
  {
    return $this->driving_experience;
  }

  public function getDriving_category()
  {
    return $this->driving_category;
  }

  public function setDriving_experience($driving_experience)
  {
    $this->driving_experience = $driving_experience;
  }

  public function setDriving_category($driving_category)
  {
    $this->driving_category = $driving_category;
  }
}
