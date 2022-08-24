<?php
class Test
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function method1()
  {
    return $this->name;
  }

  public function method2()
  {
    return $this->name;
  }

  public function method3()
  {
    return $this->name;
  }
}
