<?php
class Solution {
  function diStringMatch($s) {
    $stringArray = str_split($s);
    $result = [];
    $keyLess=0;
    $keyLast=count($stringArray);
    for ($i=0 ; $i < count($stringArray) + 1 ; $i++) {

      if (isset($stringArray[$i]) && $stringArray[$i] === 'I') {
        $result[] = $keyLess;
        $keyLess++;
      }

      if (isset($stringArray[$i]) && $stringArray[$i] === 'D') {
        $result[] = $keyLast;
        $keyLast--;
      }
    }

    $result[] = $keyLess;


    return $result;
  }
}

$solution = new Solution();
$s = "IDID";
// Output: [0,4,1,3,2]

print_r($solution->diStringMatch($s));
