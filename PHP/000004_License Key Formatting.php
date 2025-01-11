<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {
    	$textArray = str_split($s);
    	$stringResult = [];
    	$lettersCounter = 0;
    	$dashCounter = 1;
    	$separator = '-';
    	
    	for ($i=count($textArray) - 1 ; $i > -1 ; $i--) {

			if ($textArray[$i] === $separator) {
			
    			
			} else {
				
				if ($k === $lettersCounter) {
    				$stringResult[] = '-';
    				$lettersCounter = 0;
    				$dashCounter++;
    			}	
				
				$stringResult[] = strtoupper($textArray[$i]);	
				$lettersCounter++;	
			}
			
    		
    	}

        $result = implode('', $stringResult);
         print_r(strrev($result));
    }
}


$solution = new Solution();
$s = "2-5g-3-J";
$k = 2;

// $s = "5F3Z-2e-9-w";
// $s = "2-4A0r7-4k";
// $k = 4;
$solution->licenseKeyFormatting($s, $k);


// "2-5G-3J"

// "5F3Z-2E9W"
// "24A0-R74K"





// best solution
class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {
        $s = strtoupper(str_replace("-", "", $s));

        return trim(implode("-", array_merge(
            [substr($s, 0, strlen($s) % $k)],
            str_split(substr($s, strlen($s) % $k), $k)
        )), "-");
    }
}