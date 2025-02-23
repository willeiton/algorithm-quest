<?php
// Dynamic programming - Easy
class Solution {
  private $memo = [];

  /**
   * @param Integer[] $prices
   * @return Integer
   */
  function climbStairs($n) {

    if ($n == 1) return 1;
    if ($n == 2) return 2;

    if (isset($this->memo[$n])) {
      return $this->memo[$n];
    }

    $this->memo[$n] = $this->climbStairs($n - 1) + $this->climbStairs($n - 2);

    return $this->memo[$n];
  }
}

$solution = new Solution();
$n = 4;

var_dump($solution->climbStairs($n));



