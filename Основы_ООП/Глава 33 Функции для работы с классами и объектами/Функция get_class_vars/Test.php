<?php
class Test
{
  public $prop1 = 23;
  public $prop2;

  private $prop3;
  private $prop4;

  public function __construct()
  {
    return get_class_vars('Test');
  }
}
