<?php

class Solution {
  public function maximumLengthSubstring($s)
  {
    $stringArray = str_split($s);

    if (empty($stringArray)) {
      return 0;
    }

    if (count($stringArray) == 1) {
      return 1;
    }

    $result = 0;
    $stringsSaved = [];
    for($i=0; $i < count($stringArray); $i++) {
      $fl = $i + 1;
      $array = [];
      $array[] = $stringArray[$i];
      $isStringValid = true;

      while($isStringValid) {

        if (!isset($stringArray[$fl])) {
          $isStringValid = false;
          break;
        }

        $array[] = $stringArray[$fl];
        $numbersValues = array_count_values($array);

        foreach ($numbersValues as $numbers => $value) {
          if ($value > 2) {
            $isStringValid = false;
            break;
          }
        }

        if ($isStringValid) {
          $stringsSaved[] = $array;
        }

        $fl++;
      }
    }

    return count(max($stringsSaved));
  }
}

$solution = new Solution();
$s = 'a'; //3


// $s = 'aaaa'; //2
// $s = 'bbbab';
print_r($solution->maximumLengthSubstring($s));