<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $n
   * @return Integer[]
   */
  function shuffle($nums, $n) {

    $result = [];

    for ($i=0; $i < $n ; $i++) {
      $result[] = $nums[$i];
      $result[] = $nums[$i + $n];
    }

    return $result;
  }
}

$solution = new Solution();
$nums = [2,5,1,       3,4,7];
$n = 3;
// [2,3,5,4,1,7]



$nums = [1,2,3,4,4,3,2,1];
$n = 4;
// [1,4,2,3,3,2,4,1]


$nums = [1,1,2,2];
$n = 2;
// [1,2,1,2]


var_dump($solution->shuffle($nums, $n));