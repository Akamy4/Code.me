<?php
require_once('User.php');

class Student extends User
{

  private $scholarship;

  public function __construct($name, $scholarship)
  {
    $this->scholarship = $scholarship;

    parent::__construct($name);
  }

  public function getScholarship()
  {
    return $this->scholarship;
  }

  public function increaseRevenue($value)
  {
    $this->scholarship += $value;
  }

  public function decreaseRevenue($value)
  {
    $this->scholarship -= $value;
  }
}
