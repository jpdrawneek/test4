<?php

namespace Fitbug;

/**
 * Description of TemperatureConvert
 *
 * @author jpd
 */
class TemperatureConvert {
  
  protected $temps = [
      3,
      -20,
      1,
      -8,
      7,
      4,
      11,
      -3
  ];


  public function findNearestTemp($temp) {
    $currentOption = FALSE;
    $bestDiff = FALSE;
    foreach ($this->temps AS $option) {
      $diff = abs($temp - $option);
      if (!$currentOption || $diff < $bestDiff) {
        $currentOption = $option;
        $bestDiff = $diff;
      }
    }
    return $currentOption;
  }
}
