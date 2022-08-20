<?php
class User
{
  private $name;
  private $surname;
  private $number;

  public function __construct($name, $surname, $number)
  {
    $this->name = $name;
    $this->surname = $surname;
    if ($this->isNumberCorrect($number)) {
      $this->number = $number;
    } else {
      $this->number = 'Не правильно веден номер';
    }
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setNumber($number)
  {
    if ($this->isNumberCorrect($number)) {
      $this->number = $number;
    }
  }

  private function isNumberCorrect($number)
  {
    if (substr($number, 0, 2) == '+7' && strlen($number) == 12) {
      return true;
    } else {
      return false;
    }
  }
}
