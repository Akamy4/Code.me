<?php
class User
{
  public $surname;
  public $name;
  public $patronymic;

  public function __construct($surname, $name, $patronymic)
  {
    $this->surname = $surname;
    $this->name = $name;
    $this->patronymic = $patronymic;
  }
}
