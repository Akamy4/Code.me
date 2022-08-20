<?php
class Arr
{
  private $numbers = [];

  public function add($num)
  {
    $this->numbers = array_merge($this->numbers, $num);
  }

  public function getAvg()
  {
    $c = 0;
    $sum = 0;
    foreach ($this->numbers as $number) {
      $c++;
      $sum += $number;
    }
    return $sum / $c;
  }
}
