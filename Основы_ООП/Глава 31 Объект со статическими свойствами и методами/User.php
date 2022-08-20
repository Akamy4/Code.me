<?php
class User
{

  public $name;
  private static $count = 0;

  public function __construct($name)
  {
    $this->name = $name;

    self::$count++;
  }

  public static function getCount()
  {
    return self::$count;
  }
}
