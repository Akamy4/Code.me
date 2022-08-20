<?php

class User
{
  public $name;

  public function show()
  {
    return "!!!" . "<br>";
  }
}

$object = new User;

echo $object->show();

$object->name = "Akame";

echo $object->name;
