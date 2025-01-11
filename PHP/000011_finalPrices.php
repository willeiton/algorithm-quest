<?php
class Solution {

  /**
   * @param Integer[] $prices
   * @return Integer[]
   */
  /**
   * @param Integer[] $prices
   * @return Integer[]
   */
  function finalPrices($prices) {
    $result = [];

    for ($i=0 ; $i < count($prices) ; $i++) {
      $price = $prices[$i];
      $j = $i + 1;
      $foundDiscount = false;
      $operation = $price;

      while (!$foundDiscount && isset($prices[$j])) {

        if ($price >= $prices[$j]) {
          $operation = $price - $prices[$j];
          $foundDiscount = true;
        }

        $j++;
      }


      $result[] = $operation;

    }

    return $result;
  }
}

$solution = new Solution();
$s = [8,4,6,2,3];
// Output: [0,4,1,3,2]

print_r($solution->finalPrices($s));
