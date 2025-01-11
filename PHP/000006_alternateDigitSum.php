<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function alternateDigitSum($n) {
        $data = str_split($n);
        $result = 0;
        $i = 0;
        $previousNegative = true;
        $previousPositive = true;
        
        while ($i < count($data)) {
            
            if ($previousPositive && $previousNegative) {
                $result = $result + $data[$i];
                $previousPositive = true;
                $previousNegative = false;
            } else {
                $result = $result - $data[$i];
                $previousPositive = true;
                $previousNegative = true;
            }

            $i++;
        }
        
        return $result;
    }
} 



$solution  = new Solution();

$number = 521;


print_r($solution->alternateDigitSum($number));