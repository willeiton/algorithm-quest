<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSum($nums) {
    	rsort($nums);

    	$maxInEachItem = [];
    	$results = [];
    	for ($i=0 ; $i < count($nums) ; $i++) {
    		$splittedNum = str_split($nums[$i]);
    		
    		$maxKey = max($splittedNum);
    		$maxInEachItem[$maxKey][] = $nums[$i];
    		
    		if (count($maxInEachItem[max($splittedNum)]) == 2) {
    			$results[] = array_sum($maxInEachItem[$maxKey]);
    		}
    		
    	}

		
		return (empty($results) ? -1 : max($results));
    }
}



$solution  = new Solution();

// $numbers = [2536,1613,3366,162];
// 6,6,6,6
//          2536  +   3366 
//                               5902
$numbers = [112,131,411];
// -1

// $numbers = [51,71,17,24,42];
// 71 + 17

// $numbers = [31,25,72,79,74];
// 3,2,7,9,7
// 72 + 74
// 146

// $numbers = [8,75,28,35,21,13,21];
//       8(8),7(75),8(28),5(35),2(1),3(13),2(21)
// 8 + 28
// 36

// $numbers = [31,25,72,79,74];
// 8,8,8,9,6,9
// 99 + 92
// 146

// $numbers = [84,91,18,59,27,9,81,33,17,58];
//          8, 9 ,8 ,9 ,7 ,9 ,8,3 ,7 ,8
//

// $numbers = [52,32,24,6,3,89,100,3,5,3];
//           5, 3, 4,6,3,9,   1,3,5,3
// 57


print_r($solution->maxSum($numbers));