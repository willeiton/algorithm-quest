<?php
// Dynamic programming - Easy
class Solution {
  private $memo = [];

  /**
   * @param Integer[] $prices
   * @return Integer
   */
  function maxProfit($prices) {
    $currentProfit = 0;
//    $minPrice = null;
    $minPrice = PHP_INT_MAX;
    for ($i=0; $i < count($prices); $i++) {

//      if (!isset($minPrice)) {
//        $minPrice = $prices[$i];
//      } else if ($prices[$i] < $minPrice) {
//          $minPrice = $prices[$i];
//      }

      if ($prices[$i] < $minPrice) {
        $minPrice = $prices[$i];
      }

      $profit = $prices[$i] - $minPrice;
      if ($profit > $currentProfit) {
        $currentProfit = $profit;
      }
    }

    return $currentProfit;
  }
}

$solution = new Solution();
$prices = [7,1,5,3,6,4];

var_dump($solution->maxProfit($prices));



