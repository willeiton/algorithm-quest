<?php
class Solution {

  /**
   * @param Integer[][] $logs
   * @return Integer
   */
  function maximumPopulation($logs) {
    $result = [];
    for ($i=0 ; $i < count($logs) ; $i++) {

      $personsCounter = 0;
      $born = $logs[$i][0];
      $die = $logs[$i][1];
      for ($j=0 ; $j < count($logs) ; $j++) {

        if ($i == $j) {
          continue;
        }

        $bornCompare = $logs[$j][0];
        $dieCompare = $logs[$j][1];

        if ($bornCompare <= $born && $dieCompare > $born) {
          $personsCounter++;
          continue;
        }
      }

      $result[$logs[$i][0]] = $personsCounter + 1 ;

    }


    $maxValue = max($result);
    $years = array_keys($result, $maxValue);
    $smallest_year = min($years);

    return $smallest_year;
  }
}

$solution  = new Solution();
// $s = [
// 		[1982,1998],
// 		[2013,2042],
// 		[2010,2035],
// 		[2022,2050],
// 		[2047,2048]
// 	];


// $s = [
// 		[1993,1999],
// 		[2000,2010]
// 	];

$s = [
  [2033,2034],
  [2039,2047],
  [1998,2042],
  [2047,2048],
  [2025,2029],
  [2005,2044],
  [1990,1992],
  [1952,1956],
  [1984,2014]
];


$solution->maximumPopulation($s);