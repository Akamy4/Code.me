<?php
class Compare
{
  public function compare1($obj1, $obj2)
  {
    return ($obj1 == $obj2) ? 1 : 0;
  }

  public function compare2($obj1, $obj2)
  {
    return ($obj1 === $obj2) ? 1 : 0;;
  }

  public function compare3($obj1, $obj2)
  {
    if ($obj1 === $obj2) {
      return 1;
    } elseif ($obj1 == $obj2) {
      return 0;
    } else {
      return -1;
    }
  }
}
