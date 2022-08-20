<?php
class AvgHelper
{
  public function getAvg($nums)
  {
    $c = 0;
    $sum = 0;

    foreach ($nums as $num) {
      $sum += $num;
      $c++;
    }

    return $sum / $c;
  }

  public function getMeanSquare($nums)
  {
    $c = 0;
    $sum = 0;
    foreach ($nums as $num) {
      $sum += pow($num, 2);
      $c++;
    }
    return sqrt($sum / $c);
  }
}
