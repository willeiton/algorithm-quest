<?php
class Solution {

  /**
   * @param TreeNode $root
   * @return TreeNode
   */
  function reverseOddLevels($root) {
    $result[] = $root[0];
    $key = 0;
    $level = 1;
    $nodeCounter = count($root) - 2;
    $ac = 2;
    while($key < $nodeCounter) {
      $separator = $ac;
      var_dump('$separator:' . $separator);
      if ($level % 2 > 0) {
        var_dump('ODD');
        var_dump('General key:' . $key);
        $oddTo = $key + 1;
        var_dump('from odd:' . $separator . ' ; ' . 'to odd:' . $oddTo);
        for ($i=$separator ; $i >= $oddTo ; $i--) {
          var_dump('key: ' . $i);
          $result[] = $root[$i];
          $key++;
          $ac += 2;
        }
      } else {
        var_dump('PAIR');
        var_dump('General key:' . $key);
        $pairFrom = $key + 1;
        var_dump('from:' . $pairFrom . ' ; ' . 'to:' . $separator);
        for ($k=$pairFrom ; $k <= $separator ; $k++) {
          var_dump('General key: ' . $k);
          $result[] = $root[$k];
          $key++;
          $ac += 2;
        }
      }

      $level++;
    }

    print_r($result);
    return $result;
  }
}

$solution  = new Solution();
// $s = [2,3,5,8,13,21,34];
// [2,5,3,8,13,21,34]

$s = [7,13,11];
// [7,11,13]

// $s = [0,1,2,0,0,0,0,1,1,1,1,2,2,2,2];
//   [0,2,1,0,0,0,0,2,2,2,2,1,1,1,1]
$solution->reverseOddLevels($s);