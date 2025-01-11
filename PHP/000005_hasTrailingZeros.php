<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function hasTrailingZeros($numbers) {
                
        $binaryNumbers = array_map(fn($num) => str_pad(decbin($num), 4, "0", STR_PAD_LEFT), $numbers);
        
        $ceroCounter = 0;
        $oneCounter = 0;
        for ($i=0 ; $i < count($binaryNumbers) ; $i++) {
        	
        	if (substr($binaryNumbers[$i], -1) == 0) {
        		$ceroCounter++;
        	} else {
        		$oneCounter++;
        	}
        	
        }

        if ($ceroCounter >= 2) {
        	return true;
        }
    	
		return false;
    }
}



$solution  = new Solution();
// $nums = [2,3,4];
// $nums = [1,2,3,4,5];
// $nums = [2,4,8,16];
$nums = [1,3,5,7,9];
$nums = [1,2];
print_r($solution->hasTrailingZeros($nums));