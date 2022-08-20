<?php

class User
{
  public $name;

  public function show($str)
  {
    return $str . "!!!" . "<br>";
  }
}

$object = new User;

echo $object->show("New obj");

$object->name = "Akame";

echo $object->name;
