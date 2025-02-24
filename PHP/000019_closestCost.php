<?php

// Dynamic programming - Medium
class Solution
{
  private $memo = [];

  /**
   * @param Integer[] $baseCosts
   * @param Integer[] $toppingCosts
   * @param Integer $target
   * @return Integer
   */
  function closestCost($baseCosts, $toppingCosts, $target)
  {
    //  Pending
  }
}

$solution = new Solution();
$baseCosts = [1,7];
$toppingCosts = [3,4];
$target = 10;
var_dump($solution->closestCost($baseCosts,$toppingCosts,$target));



