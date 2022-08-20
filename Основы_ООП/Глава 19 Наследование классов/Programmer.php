<?php
require_once('Employee.php');

class Programmer extends Employee
{
  private $langs = [];

  public function getLangs()
  {
    foreach ($this->langs as $lang) {
      echo $lang . " ";
    }
  }

  public function add($lang)
  {
    $this->langs[] = $lang;
  }

  public function push($langs)
  {
    $this->langs = array_merge($this->langs, $langs);
  }
}
