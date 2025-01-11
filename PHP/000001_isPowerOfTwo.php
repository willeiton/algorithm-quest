<?php
class Solution
{

  /**
   * @param Integer $n
   * @return Boolean
   */
  function isPowerOfTwo($n)
  {

    $result = 2;
    $sum = 2;
    $response = false;
    while ($sum < $n) {

	 if ($n === 1) {
        return true;
      }	

      $result = 2 * $sum;
      $sum = $result;

      if ($result === $n) {
        return true;
      }
    }

    return $response;
  }
}

$yeah = new Solution();
var_dump($yeah->isPowerOfTwo(2));